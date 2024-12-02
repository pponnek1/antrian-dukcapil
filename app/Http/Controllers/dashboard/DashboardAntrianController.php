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

    public function index()
    {
        return view('dashboard.antrian.index', [
            'antrians' => Antrian::all(),
            'layanans' => Layanan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $layanans = Layanan::all();

        // Pass the Layanan data to the view
        return view('dashboard.antrian.create', [
            'layanans' => $layanans,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_layanan' => 'required',
            'kode' => 'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required',
            'slug' => 'required|unique:antrians',
            'batas_antrian' => 'required|numeric',
            'layanans_id' => 'required|exists:layanans,id',  // Validate the existence of 'layanans_id'
        ]);

        $validated['users_id'] = auth()->user()->id;

        // Create a new Antrian, including 'layanans_id'
        Antrian::create($validated);

        Alert::success('Sukses', 'Berhasil Menambahkan Menu Antrian baru');
        return redirect('/dashboard/antrian');
    }

    /**
     * Display the specified resource.
     */

    public function show()
    {
        // Assuming you have a model called 'Layanan'
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Antrian $antrian)
    {
        // Fetch Layanan data for editing
        return view('dashboard.antrian.edit', [
            'antrian' => $antrian,
            'layanans' => Layanan::all(),  // Pass Layanan data for selection
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Antrian $antrian)
    {
        $rules = [
            'nama_layanan' => 'required',
            'kode' => 'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required',
            'slug' => 'required|unique:antrians,slug,' . $antrian->id,
            'batas_antrian' => 'required|numeric',
            'layanans_id' => 'required|exists:layanans,id',  // Validate the existence of 'layanans_id'
        ];

        $validated = $request->validate($rules);
        $validated['users_id'] = auth()->user()->id;

        // Update the Antrian record with the new validated data
        $antrian->update($validated);

        Alert::success('Berhasil !', 'Berhasil Mengedit Menu Antrian');
        return redirect('/dashboard/antrian');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $antrian = Antrian::findOrFail($id);

        $antrian->delete();  // Delete the Antrian
        Alert::success('Berhasil', 'Berhasil Menghapus Menu Antrian');
        return redirect('/dashboard/antrian');
    }

    /**
     * Check and create slug based on nama_layanan.
     */

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Antrian::class, 'slug', $request->nama_layanan);
        return response()->json(['slug' => $slug]);
    }

    /**
     * Get autocomplete data for Layanan.
     */

    public function getAutoCompleteData(Request $request)
    {
        if ($request->has('term')) {
            return Layanan::where('nama_layanan', 'like', '%' . $request->input('term') . '%')->get();
        }
    }
}

