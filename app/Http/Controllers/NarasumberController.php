<?php

namespace App\Http\Controllers;

use App\Models\Narasumber;
use App\Models\kecamatan;
use App\Models\kelurahan;
use Illuminate\Http\Request;

class NarasumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('user/layanan_narsumpendampingan/index',[
            'narasumber'=> Narasumber::all()->where('user_id', $user->id),
            "user" => auth()->user()
        ]);
    }

    public function tampil()
    {
        return view('admin/layanan_narsumpendampingan/index', [
            'narasumber' => Narasumber::all(),
            'user' => auth()->user()
        ]);
    }

    public function detail(Narasumber $narasumber)
    {
        return view('user/layanan_narsumpendampingan/detail', [
            'narasumber' => $narasumber,
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
        return view('user/layanan_narsumpendampingan/form', [
            'narasumber' => Narasumber::all(),
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
            'materi' => 'required|max:255',
            'tujuan_kegiatan' => 'required|max:255',
            'tgl_kegiatan' => 'required|max:255',
            'surat_permohonan' => 'required|file|max:5000',
            'status' => 'required|max:255',
            'tgl_antri' => 'required'                 
        ]);
        
        if($request->file('surat_permohonan')){
            $validatedData['surat_permohonan'] = $request->file('surat_permohonan')->store('files');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['instansi'] = $user->perangkat->instansi;

        Narasumber::create($validatedData);
        return redirect('/PermohonanNarsumPendampingan')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Narasumber  $narasumber
     * @return \Illuminate\Http\Response
     */
    public function show(Narasumber $narasumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Narasumber  $narasumber
     * @return \Illuminate\Http\Response
     */
    public function edit(Narasumber $narasumber)
    {
        return view('admin/layanan_narsumpendampingan/verifikasi', [
            "narasumber" => $narasumber,
            'user' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Narasumber  $narasumber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Narasumber $narasumber)
    {
        $validatedData = $request->validate([
            // 'narasumber' => 'required|max:255'
            'status' => 'required|max:255',
            'tgl_proses' => 'max:255',
            'tgl_selesai' => 'max:255'
        ]);

        Narasumber::where('id', $narasumber->id)->update($validatedData);

        return redirect('/form/KelolaNarasumberPendampingan')->with('success', 'Data Berhasil Diverifikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Narasumber  $narasumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Narasumber $narasumber)
    {
        Narasumber::destroy($narasumber->id);
        return redirect('/form/KelolaNarasumberPendampingan')->with('success', 'Data Berhasil Dihapus');
    }
}
