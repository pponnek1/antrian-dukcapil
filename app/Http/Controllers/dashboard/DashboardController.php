<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Antrian;
use App\Models\Layanan;
use App\Models\Ambilantrian;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil semua data antrian
        $antrianList = Antrian::all();
        $layananList = Layanan::all();
        $orangAntri = Ambilantrian::all();

        // Menghitung jumlah layanan
        $jumlahAntrianBuka = $antrianList->count();
        $jumlahLayanan = $layananList->count();
        $jumlahOrangAntri = $orangAntri->count();

        // Mengirim data ke view
        return view('dashboard.index', [
            'antrianList' => $antrianList,
            'jumlahAntrianBuka' => $jumlahAntrianBuka,
            'jumlahLayanan' => $jumlahLayanan,
            'jumlahOrangAntri' => $jumlahOrangAntri,
        ]);
    }
}
