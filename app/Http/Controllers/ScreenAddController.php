<?php

namespace App\Http\Controllers;
use App\Models\Antrian;
use Illuminate\Http\Request;

class ScreenAddController extends Controller
{
    public function index()
    {
        $antrianList = Antrian::all();

    return view('index', [
        'antrianList' => $antrianList,
    ]);
    }
}
