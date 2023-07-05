<?php

namespace App\Http\Controllers;

use App\Models\Subdomain;
use App\Models\kecamatan;
use App\Models\kelurahan;
use Illuminate\Http\Request;

class SubdomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('user/layanan_permohonansubdomain/index',[
            // 'subdomain' => Subdomain::all(),
            'subdomain'=> Subdomain::all()->where('user_id', $user->id),
            "user" => auth()->user()
        ]);
    }

    
    public function tampil()
    {
        return view('admin/layanan_permohonansubdomain/index', [
            'subdomain' => Subdomain::all(),
            'user' => auth()->user()
        ]);
    }

    public function detail(Subdomain $subdomain)
    {
        return view('user/layanan_permohonansubdomain/detail', [
            'subdomain' => $subdomain,
            'user' => auth()->user()
        ]);
    }

    public function print()
    {
        return view('admin/layanan_permohonansubdomain/print', [
            'subdomain' => Subdomain::all(),
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
        return view('user/layanan_permohonansubdomain/form', [
            'subdomain' => Subdomain::all(),
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

        Subdomain::create($validatedData);
        return redirect('/PermohonanSubdomain')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subdomain  $subdomain
     * @return \Illuminate\Http\Response
     */
    public function show(Subdomain $subdomain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subdomain  $subdomain
     * @return \Illuminate\Http\Response
     */
    public function edit(Subdomain $subdomain)
    {
        return view('admin/layanan_permohonansubdomain/verifikasi', [
            "subdomain" => $subdomain,
            'kec' => kecamatan::all(),
            'kel' => kelurahan::all(),
            'user' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subdomain  $subdomain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subdomain $subdomain)
    {
        $validatedData = $request->validate([
            'status' => 'required|max:255',
            'tgl_proses' => 'max:255',
            'tgl_selesai' => 'max:255'
        ]);

        Subdomain::where('id', $subdomain->id)->update($validatedData);

        return redirect('/form/KelolaSubdomain')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subdomain  $subdomain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subdomain $subdomain)
    {
        Subdomain::destroy($subdomain->id);
        return redirect('/form/KelolaSubdomain')->with('success', 'Data Berhasil Dihapus');
    }
}
