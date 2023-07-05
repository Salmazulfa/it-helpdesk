<?php

namespace App\Http\Controllers;

use App\Models\PembuatanApp;
use Illuminate\Http\Request;

class PembuatanAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('user/layanan_pembuatanaplikasi/index',[
            'pembuatanApp'=> PembuatanApp::all()->where('user_id', $user->id),
            "user" => auth()->user()
        ]);
    }
    
    public function tampil()
    {
        return view('admin/layanan_pembuatanaplikasi/index', [
            'pembuatanApp' => PembuatanApp::all(),
            'user' => auth()->user()
        ]);
    }

    public function detail(PembuatanApp $pembuatanApp)
    {
        return view('user/layanan_pembuatanaplikasi/detail', [
            'pembuatanApp' => $pembuatanApp,
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
        return view('user/layanan_pembuatanaplikasi/form', [
            'pembuatanApp' => PembuatanApp::all(),
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
            'latarbelakang' => 'required|max:255',
            'nama_app' => 'required|max:255',
            'deskripsi_app' => 'required|max:255',
            'status_terintegrasi' => 'required|max:255',
            'aplikasi_terintegrasi' => 'required|max:255',
            'kebutuhan_fitur' => 'required|max:255',
            'tgl_penggunaan' => 'required|max:255',
            'proses_bisnis' => 'required|file|max:5000',
            'surat_permohonan' => 'required|file|max:5000',
            'status' => 'required|max:255',
            'tgl_antri' => 'required'                 
        ]);
        if($request->file('surat_permohonan')){
            $validatedData['surat_permohonan'] = $request->file('surat_permohonan')->store('files');
        }
        
        if($request->file('proses_bisnis')){
            $validatedData['proses_bisnis'] = $request->file('proses_bisnis')->store('files');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['instansi'] = $user->perangkat->instansi;

        PembuatanApp::create($validatedData);
        return redirect('/PermohonanPembuatanAplikasi')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PembuatanApp  $pembuatanApp
     * @return \Illuminate\Http\Response
     */
    public function show(PembuatanApp $pembuatanApp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PembuatanApp  $pembuatanApp
     * @return \Illuminate\Http\Response
     */
    public function edit(PembuatanApp $pembuatanApp)
    {
        return view('admin/layanan_pembuatanaplikasi/verifikasi', [
            "pembuatanApp" => $pembuatanApp,
            'user' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PembuatanApp  $pembuatanApp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PembuatanApp $pembuatanApp)
    {
        $validatedData = $request->validate([
            // 'pembuatanApp' => 'required|max:255',
            'status' => 'required|max:255',
            'tgl_proses' => 'max:255',
            'tgl_selesai' => 'max:255'
        ]);

        PembuatanApp::where('id', $pembuatanApp->id)->update($validatedData);

        return redirect('/form/KelolaPembuatanAplikasi')->with('success', 'Data Berhasil Diverifikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PembuatanApp  $pembuatanApp
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembuatanApp $pembuatanApp)
    {
       PembuatanApp::destroy($pembuatanApp->id);
        return redirect('/form/KelolaPembuatanAplikasi')->with('success', 'Data Berhasil Dihapus');
    }
}
