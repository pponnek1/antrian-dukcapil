<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Ambilantrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Validation\ValidationException;

class AntrianController extends Controller
{
    public function index(Antrian $antrian)
    {
        return view('homepage.registrasi-antrian.index', [
            'antrianList' => Antrian::all(),
            'antrian' => $antrian,
            'kode' => $antrian->kode,
        ]);
    }

    public function create(Antrian $antrian)
    {
        return view('homepage.registrasi-antrian.create', [
            'antrian' => $antrian,
            'kode' => $antrian->kode,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal'       => ['required', 'date'],
            'nama_lengkap'  => ['required', 'string'],
            'alamat'        => ['required', 'string'],
            'nomorhp'       => ['required', 'string'],
            'antrian_id'    => ['required', 'exists:antrians,id'],
        ]);

        $antrian = Antrian::findOrFail($validated['antrian_id']);
        $serviceCode = $antrian->kode;

        // Generate next queue number
        $nextKode = $this->generateNextQueueNumber($serviceCode, $validated['tanggal']);

        // Check queue limit
        $this->checkQueueLimit($antrian, $validated['tanggal']);

        $validated['kode'] = $nextKode;
        $validated['user_id'] = Auth::id();

        Ambilantrian::create($validated);

        return redirect('/antrian')->with('success', 'Berhasil Mengambil Antrian');
    }

    protected function generateNextQueueNumber(string $serviceCode, string $date): string
    {
        $lastRecord = Ambilantrian::where('tanggal', $date)
            ->where('kode', 'like', $serviceCode.'%')
            ->orderByDesc('created_at')
            ->first();

        $nextKodeInt = $lastRecord
            ? intval(substr($lastRecord->kode, -3)) + 1
            : 1;

        $nextKodePadded = str_pad($nextKodeInt, 3, '0', STR_PAD_LEFT);
        $nextKode = $serviceCode . '-' . $nextKodePadded;

        // Validate unique queue number
        $existingRecord = Ambilantrian::where('kode', $nextKode)
            ->where('tanggal', $date)
            ->exists();

        if ($existingRecord) {
            throw ValidationException::withMessages([
                'tanggal' => 'Gagal mengambil antrian. Silahkan ambil di hari lain.'
            ]);
        }

        return $nextKode;
    }

    protected function checkQueueLimit(Antrian $antrian, string $date): void
    {
        $antrianCount = Ambilantrian::where('antrian_id', $antrian->id)
            ->where('tanggal', $date)
            ->count();

        if ($antrianCount >= $antrian->batas_antrian) {
            throw ValidationException::withMessages([
                'antrian' => 'Maaf, Antrian Sudah Penuh. Silahkan Coba Di Hari Lain'
            ]);
        }
    }

    public function detail()
    {
        return view('homepage.registrasi-antrian.detail', [
            'detailAntrian' => Auth::user()->ambilAntrians
        ]);
    }

    public function destroy(Ambilantrian $ambilAntrian)
    {
        // Check if the current user owns the queue ticket
        if ($ambilAntrian->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $ambilAntrian->delete();

        return redirect('/antrian/detail')->with('success', 'Berhasil Menghapus Antrian');
    }

    public function cetakKodeAntrian(Ambilantrian $ambilAntrian)
    {
        // Check if the current user owns the queue ticket
        if ($ambilAntrian->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $logoPath = storage_path('app/public/logo/logo.png');
        $logo = base64_encode(file_get_contents($logoPath));

        $pdf = PDF::loadView('antrian.kode-antrian', [
            'cetakKodeAntrian' => $ambilAntrian,
            'logo' => $logo
        ]);

        return $pdf->stream('kode-antrian.pdf');
    }
}
