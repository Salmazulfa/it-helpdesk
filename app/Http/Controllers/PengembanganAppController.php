<?php

namespace App\Http\Controllers;

use App\Models\PengembanganApp;
use App\Models\kecamatan;
use App\Models\kelurahan;
use Illuminate\Http\Request;

class PengembanganAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('user/layanan_pengembanganaplikasi/index', [
            'pengembanganApp'=> PengembanganApp::all()->where('user_id', $user->id),
            "user" => auth()->user()
        ]);
    }

    public function tampil()
    {
        return view('admin/layanan_pengembanganaplikasi/index', [
            'pengembanganApp' => PengembanganApp::all(),
            "user" => auth()->user()
        ]);
    }

    public function detail(PengembanganApp $pengembanganApp)
    {
        return view('user/layanan_pengembanganaplikasi/detail', [
            'pengembanganApp' => $pengembanganApp,
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
        return view('user/layanan_pengembanganaplikasi/form', [
            "pengembanganApp" => PengembanganApp::all(),
            'kec' => kecamatan::all(),
            "user" => auth()->user(),
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
        $user = auth()->user();
        $validatedData = $request->validate([
            // 'nama_perangkat' => 'required|max:255',
            'nama_app' => 'required|max:255',
            'latarbelakang' => 'required|max:255',
            'pengembang_app' => 'required|max:255',
            'status_terintegrasi' => 'required|max:255',
            'aplikasi_terintegrasi' => 'required|max:255',
            'fitur_pengembangan' => 'required|max:255',
            'surat_permohonan' => 'required|file|max:5000',
            'status' => 'required|max:255',
            'tgl_antri' => 'required'     
        ]);

        if ($request->file('surat_permohonan')) {
            $validatedData['surat_permohonan'] = $request->file('surat_permohonan')->store('files');
        }


        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['instansi'] = $user->perangkat->instansi;

        PengembanganApp::create($validatedData);
        return redirect('/PermohonanPengembanganAplikasi')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengembanganApp  $pengembanganApp
     * @return \Illuminate\Http\Response
     */
    public function show(PengembanganApp $pengembanganApp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengembanganApp  $pengembanganApp
     * @return \Illuminate\Http\Response
     */
    public function edit(PengembanganApp $pengembanganApp)
    {
        return view('admin/layanan_pengembanganaplikasi/verifikasi', [
            "pengembanganApp" => $pengembanganApp,
            'user' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengembanganApp  $pengembanganApp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengembanganApp $pengembanganApp)
    {
        $validatedData = $request->validate([
            // 'pengembanganApp' => 'required|max:255'
            'status' => 'required|max:255',
            'tgl_proses' => 'max:255',
            'tgl_selesai' => 'max:255'
        ]);

        PengembanganApp::where('id', $pengembanganApp->id)->update($validatedData);

        return redirect('/form/KelolaPengembanganAplikasi')->with('success', 'Data Berhasil Diverifikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengembanganApp  $pengembanganApp
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengembanganApp $pengembanganApp)
    {
        PengembanganApp::destroy($pengembanganApp->id);
        return redirect('/form/KelolaPengembanganAplikasi')->with('success', 'Data Berhasil Dihapus');
    }
}
