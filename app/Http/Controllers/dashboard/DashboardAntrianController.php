<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Antrian;
use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardAntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // Menampilkan Semua Data Antrian Yang Tersedia
    public function index()
    {
        return view('dashboard.antrian.index', [
            'antrians' => Antrian::all(),
            'layanans' => Layanan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    // Menampilkan view untuk tambah antrian baru
    public function create()
    {
        return view('dashboard.antrian.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    // Proses Store Data ke Tabel antrians
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_layanan'  => 'required',
            'kode'          => 'required',
            'deskripsi'     => 'required',
            'persyaratan'   => 'required',
            'slug'          => 'required|unique:antrians',
            'batas_antrian' => 'required|numeric',
            'layanans_id' => 'required|exists:layanans,id',
        ]);

        $validated['users_id'] = auth()->user()->id;

        try {
            // Menyimpan data ke database
            Antrian::create($validated);
            Alert::success('Sukses', 'Berhasil Menambahkan Menu Antrian baru');
        } catch (\Exception $e) {
            // Tangani jika ada kesalahan saat penyimpanan
            Alert::error('Gagal', 'Terjadi kesalahan saat menyimpan data');
        }

        // Redirect setelah proses selesai
        return redirect('/dashboard/antrian');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $antrian = Antrian::findOrFail($id);
        return view('dashboard.antrian.show', compact('antrian'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    // Mengarahkan ke view edit
    public function edit(Antrian $antrian)
    {
        return view('dashboard.antrian.edit', [
            'antrian' => $antrian,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    // Proses Update Data
    public function update(Request $request, Antrian $antrian)
    {
        $rules = [
            'nama_layanan'  => 'required',
            'kode'          => 'required',
            'deskripsi'     => 'required',
            'persyaratan'   => 'required',
            'slug'          => 'required|unique:antrians,slug,' . $antrian->id,
            'batas_antrian' => 'required|numeric'
        ];

        $validated = $request->validate($rules);
        $validated['users_id'] = auth()->user()->id;

        try {
            // Update data
            Antrian::where('id', $antrian->id)
                ->update($validated);
            Alert::success('Berhasil !', 'Berhasil Mengedit Menu Antrian');
        } catch (\Exception $e) {
            // Tangani jika ada kesalahan saat memperbarui data
            Alert::error('Gagal', 'Terjadi kesalahan saat memperbarui data');
        }

        return redirect('/dashboard/antrian');
    }

    /**
     * Remove the specified resource from storage.
     */

    // Proses hapus Antrian
    public function destroy($id)
    {
        try {
            $antrian = Antrian::findOrFail($id);

            Antrian::destroy($antrian->id);
            Alert::success('Berhasil', 'Berhasil Menghapus Menu Antrian');
        } catch (\Exception $e) {
            // Tangani jika ada kesalahan saat penghapusan
            Alert::error('Gagal', 'Data tidak ditemukan atau gagal dihapus');
        }

        return redirect('/dashboard/antrian');
    }

    /**
     * Method untuk membuat Slug otomatis yang diambil dari field nama_layanan
     */
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Antrian::class, 'slug', $request->nama_layanan);
        // Cek jika slug sudah ada, tambahkan angka acak atau ID untuk menghindari duplikasi
        $existingSlugCount = Antrian::where('slug', $slug)->count();
        if ($existingSlugCount > 0) {
            $slug = $slug . '-' . uniqid();
        }

        return response()->json(['slug' => $slug]);
    }

    /**
     * Method untuk mengambil data dari Model Layanan
     */
    public function getAutoCompleteData(Request $request)
    {
        if ($request->has('term')) {
            return Layanan::where('nama_layanan', 'like', '%' . $request->input('term') . '%')
                           ->limit(10)  // Batasi hasil pencarian
                           ->get();
        }
    }
}
