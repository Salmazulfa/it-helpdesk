<?php

namespace App\Http\Controllers;

use App\Models\kecamatan;
use App\Models\kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/masterdata_show/kelurahan/index',[
            'kel' => kelurahan::all(),
            'kec' => kecamatan::all(),
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
        return view('admin/masterdata_show/kelurahan/index', [
            "kel" => kelurahan::all()
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
            'kecamatan_id' => 'required',
            'kelurahan' => 'required|max:255'
        ]);

        kelurahan::create($validatedData);

        return redirect('/md/ViewKelurahan')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function show(kelurahan $kelurahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function edit(kelurahan $kelurahan)
    {
        return view('admin/masterdata_show/kelurahan/index#ModalEdit', [
            "kel" => $kelurahan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kelurahan $kelurahan)
    {
        $validatedData = $request->validate([
            'kelurahan' => 'required|max:255'
        ]);

        kelurahan::where('id', $kelurahan->id)->update($validatedData);

        return redirect('/md/ViewKelurahan')->with('success', 'Data Berhasil Diupdate');

        // dd($kelurahan->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelurahan $kelurahan)
    {
        kelurahan::destroy($kelurahan->id);
        return redirect('/md/ViewKelurahan')->with('success', 'Data Berhasil Dihapus');
    }
}
