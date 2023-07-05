<?php

namespace App\Http\Controllers;

use App\Models\kecamatan;
use App\Models\kelurahan;
use App\Models\Wifi;
use Illuminate\Http\Request;

class WifiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Wifi $wifi)
    {
        $user = auth()->user();
        // dd($user->id);
        return view('user/layanan_aduanwifi/index', [
            // 'wifi' => Wifi::all(),
            'wifi' => Wifi::all()->where('user_id', $user->id),
            'kec' => kecamatan::all(),
            'kel' => kelurahan::all(),
            'user' => auth()->user()
        ]);
    }

    public function tampil()
    {
        return view('admin/layanan_aduanwifi/index', [
            'wifi' => Wifi::all(),
            'user' => auth()->user()
        ]);
    }

    public function detail(Wifi $wifi)
    {
        return view('user/layanan_aduanwifi/detail', [
            'wifi' => $wifi,
            'user' => auth()->user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/layanan_aduanwifi/form', [
            'wifi' => Wifi::all(),
            'kec' => kecamatan::all(),
            'kel' => kelurahan::all(),
            'user' => auth()->user(),
            'd' => date("Y-m-d")
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'penanggungjawab' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kelurahan' => 'required|max:255',
            'rw' => 'required|max:255',
            'kategori' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'status' => 'required|max:255',
            'tgl_antri' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        if (Wifi::create($validatedData)) {
            return redirect('/LaporanWifi')->with('success', 'Data Berhasil Disimpan');
        } else {
            return redirect('/LaporanWifi/create')->with('error', 'Data Gagal Disimpan');
        }
        return redirect('/LaporanWifi/create')->with('error', 'Data Gagal Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wifi  $wifi
     * @return \Illuminate\Http\Response
     */
    public function show(Wifi $wifi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wifi  $wifi
     * @return \Illuminate\Http\Response
     */
    public function edit(Wifi $wifi)
    {
        return view('admin/layanan_aduanwifi/verifikasi', [
            "wifi" => $wifi,
            "kec" => kecamatan::all(),
            "kel" => kelurahan::all(),
            'user' => auth()->user()
        ]);
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wifi  $wifi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wifi $wifi)
    {

        $validatedData = $request->validate([
            'status' => 'required|max:255',
            'tgl_proses' => 'max:255',
            'tgl_selesai' => 'max:255'
        ]);

        Wifi::where('id', $wifi->id)->update($validatedData);
        return redirect('/form/KelolaWifi')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wifi  $wifi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wifi $wifi)
    {
        Wifi::destroy($wifi->id);
        return redirect('/form/KelolaWifi')->with('success', 'Data Berhasil Dihapus');
    }

    public function dataKelurahan(Request $request)
    {
        $kecamatan_id = $request->kecamatan_id;
        $kelurahan = Kelurahan::all()->where('kecamatan', $kecamatan_id);

        echo "<option value=''>--Pilih Kelurahan--</option>";
        foreach ($kelurahan as $kel) {
            // echo "<option value='$kel->id'>$kelurahan->name</option>";
            echo "<option value='{{ $kel->id }}'>$kel->kelurahan</option>";
        }
    }
}
