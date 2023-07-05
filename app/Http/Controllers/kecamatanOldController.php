<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kecamatan;

class kecamatanController extends Controller
{
    public function index()
    {
        return view('kecamatans', [
            "kecamatan" => kecamatan::all()
        ]);
    }

    // public function show(kecamatan $kecamatan)
    // {
    //     return view('kecamatan', [
    //         "kecamatan" => $kecamatan
    //     ]);
    // }

    // public function show()
    // {
    //     return view('kecamatans', [
    //         "kecamatan" => kecamatan::find($slug)
    //     ]);
    // }

}