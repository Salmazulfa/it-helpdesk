<?php

namespace App\Http\Controllers;

use App\Models\kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/masterdata_show/kecamatan/index',[
            'kec' => Kecamatan::all(),
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
        return view('admin/masterdata_show/kecamatan/index', [
            "kec" => Kecamatan::all()
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
            'kecamatan' => 'required|max:255'
        ]);

        Kecamatan::create($validatedData);

        return redirect('/md/ViewKecamatan')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit(kecamatan $kecamatan)
    {
        return view('admin/masterdata_show/kecamatan/index#ModalEdit', [
            "kec" => $kecamatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kecamatan $kecamatan)
    {
        $validatedData = $request->validate([
            'kecamatan' => 'required|max:255'
        ]);

        Kecamatan::where('id', $kecamatan->id)->update($validatedData);

        return redirect('/md/ViewKecamatan')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kecamatan $kecamatan)
    {
        kecamatan::destroy($kecamatan->id);
        return redirect('/md/ViewKecamatan')->with('success', 'Data Berhasil Dihapus');
    }
}
