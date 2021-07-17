<?php

namespace App\Http\Controllers;

use App\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = Anggota::all();
        $data['anggota'] = $anggotas;
        return view('anggota.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["action"] = 'anggota.store';
        return view('anggota.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anggota = new Anggota();
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->alamat_anggota = $request->alamat_anggota;
        $anggota->asal_sekolah = $request->asal_sekolah;
        $anggota->mata_pelajaran = $request->mata_pelajaran;
        $anggota->save();

        return redirect('anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $anggota = Anggota::find($id);
        $data['anggota'] = $anggota;
        $data['action'] = 'anggota/update';
        return view('anggota.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
        $anggota = Anggota::find($request->id);
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->alamat_anggota = $request->alamat_anggota;
        $anggota->asal_sekolah = $request->asal_sekolah;
        $anggota->mata_pelajaran = $request->mata_pelajaran;
        $anggota->save();
        return redirect('/anggota');
    }

    public function delete($id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect('/anggota');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        //
    }
}
