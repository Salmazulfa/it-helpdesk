<?php

namespace App\Http\Controllers;

use App\Models\Server;
use App\Models\kecamatan;
use App\Models\kelurahan;
use Illuminate\Http\Request;

class MigrasiServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('user/layanan_permohonanmigrasiserver/index',[
            'migrasiserver'=> Server::all()->where('user_id', $user->id),
            "user" => auth()->user()
        ]);
    }

    public function tampil()
    {
        return view('admin/layanan_permohonanmigrasiserver/index', [
            'migrasiserver' => Server::all(),
            'user' => auth()->user()
        ]);
    }

    public function detail(Server $migrasiserver)
    {
        return view('user/layanan_permohonanmigrasiserver/detail', [
            'migrasiserver' => $migrasiserver,
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
        return view('user/layanan_permohonanmigrasiserver/form', [
            'migrasiserver' => Server::all(),
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
            'deskripsi_app' => 'required|max:255',
            'pengembang_app' => 'required|max:255',
            'status_terintegrasi' => 'required|max:255',
            'aplikasi_terintegrasi' => 'required|max:255',
            'tgl_penggunaan' => 'required|max:255',
            'subdomain' => 'required|max:255',
            'info_server' => 'required|max:255',
            'surat_permohonan' => 'required|file|max:5000',
            'status' => 'required|max:255',
            'tgl_antri' => 'required'                 
        ]);
        
        if($request->file('surat_permohonan')){
            $validatedData['surat_permohonan'] = $request->file('surat_permohonan')->store('files');
        }
        

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['instansi'] = $user->perangkat->instansi;

        Server::create($validatedData);
        return redirect('/PermohonanMigrasiServer')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function show(Server $server)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Server  $migrasiserver
     * @return \Illuminate\Http\Response
     */
    public function edit(Server $migrasiserver)
    {
        return view('admin/layanan_permohonanmigrasiserver/verifikasi', [
            "migrasiserver" => $migrasiserver,
            'user' => auth()->user()
        ]);
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Server  $migrasiserver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Server $migrasiserver)
    {
        $validatedData = $request->validate([
            'status' => 'required|max:255',
            'tgl_proses' => 'max:255',
            'tgl_selesai' => 'max:255'
        ]);

        Server::where('id', $migrasiserver->id)->update($validatedData);

        return redirect('/form/KelolaMigrasiServer')->with('success', 'Data Berhasil Diverifikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Server  $migrasiserver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Server $migrasiserver)
    {
        Server::destroy($migrasiserver->id);
        return redirect('/form/KelolaMigrasiServer')->with('success', 'Data Berhasil Dihapus');
    }
}
