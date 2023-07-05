<?php

namespace App\Http\Controllers;

use App\Models\PerangkatDaerah;
use Illuminate\Http\Request;

class PerangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/masterdata_show/perangkat/index',[
            'perangkat' => PerangkatDaerah::all(),
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
        return view('admin/masterdata_show/perangkat/index', [
            "perangkat" => PerangkatDaerah::all()
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
            'nama_perangkat' => 'required|max:255',
            'instansi' => 'required|max:255'
        ]);

        PerangkatDaerah::create($validatedData);

        return redirect('/md/ViewInstansi')->with('success', 'Data Perangkat Daerah Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PerangkatDaerah  $perangkatDaerah
     * @return \Illuminate\Http\Response
     */
    public function show(PerangkatDaerah $perangkatDaerah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerangkatDaerah  $perangkatDaerah
     * @return \Illuminate\Http\Response
     */
    public function edit(PerangkatDaerah $perangkatDaerah)
    {
        return view('admin/masterdata_show/perangkat/index#ModalEdit', [
            // "perangkat" => $perangkatDaerah
            'perangkat' => PerangkatDaerah::all(),
            'user' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PerangkatDaerah  $perangkatDaerah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerangkatDaerah $perangkatDaerah)
    {
        $validatedData = $request->validate([
            'instansi' => 'required|max:255'
        ]);

        $id = $request['id'];

        PerangkatDaerah::where('id', $id)->update($validatedData);
        // PerangkatDaerah::where('id', $perangkatDaerah->id)->update($validatedData);

        return redirect('/md/ViewInstansi')->with('success', 'Data Perangkat Daerah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerangkatDaerah  $perangkatDaerah
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerangkatDaerah $perangkatDaerah)
    {
        PerangkatDaerah::destroy($perangkatDaerah->id);
        return redirect('/md/ViewInstansi')->with('success', 'Data Perangkat Daerah Berhasil Dihapus');
    }
}
