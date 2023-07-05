<?php

namespace App\Http\Controllers;

use App\Models\Zoom;
use App\Models\kecamatan;
use App\Models\kelurahan;
use Illuminate\Http\Request;

class ZoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('user/layanan_fasilitaszoom/index',[
            'zoom'=> Zoom::all()->where('user_id', $user->id),
            "user" => auth()->user()
        ]);
    }

    public function tampil()
    {
        return view('admin/layanan_fasilitaszoom/index', [
            'zoom' => Zoom::all(),
            'user' => auth()->user()
        ]);
    }

    public function detail(Zoom $zoom){
        return view('user/layanan_fasilitaszoom/detail',[
            'zoom'=> $zoom,
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
        return view('user/layanan_fasilitaszoom/form', [
            'zoom' => Zoom::all(),
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
            'nama_kegiatan' => 'required|max:255',
            'peserta' => 'required|max:255',
            'tgl_kegiatan' => 'required|max:255',
            'jam_kegiatan' => 'required|max:255',
            'surat_permohonan' => 'required|file|max:5000',
            'status' => 'required|max:255',
            'tgl_antri' => 'required'                 
        ]);
        
        if($request->file('surat_permohonan')){
            $validatedData['surat_permohonan'] = $request->file('surat_permohonan')->store('files');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['instansi'] = $user->perangkat->instansi;

        Zoom::create($validatedData);
        return redirect('/PermohonanFasilitasZoom')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function show(Zoom $zoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function edit(Zoom $zoom)
    {
        return view('admin/layanan_fasilitaszoom/verifikasi', [
            "zoom" => $zoom,
            'user' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zoom $zoom)
    {
        $validatedData = $request->validate([
            'status' => 'required|max:255',
            'tgl_proses' => 'max:255',
            'tgl_selesai' => 'max:255'
        ]);

        Zoom::where('id', $zoom->id)->update($validatedData);

        return redirect('/form/KelolaFasilitasZoom')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zoom  $zoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zoom $zoom)
    {
        Zoom::destroy($zoom->id);
        return redirect('/form/KelolaFasilitasZoom')->with('success', 'Data Berhasil Dihapus');
    }
}
