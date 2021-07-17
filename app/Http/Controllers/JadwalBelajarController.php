<?php

namespace App\Http\Controllers;

use App\JadwalBelajar;
use Illuminate\Http\Request;

class JadwalBelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwalbelajars = JadwalBelajar::all();
        $data['jadwalbelajar'] = $jadwalbelajars;
        return view('jadwalbelajar.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'jadwalbelajar.store';
        return view ('jadwalbelajar.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jadwalbelajar = new JadwalBelajar;
        $jadwalbelajar->hari = $request->hari;
        $jadwalbelajar->pengajar = $request->pengajar;
        $jadwalbelajar->mata_pelajaran = $request->mata_pelajaran;
        $jadwalbelajar->durasi_belajar = $request->durasi_belajar;
        $jadwalbelajar->save();

        return redirect('/jadwalbelajar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JadwalBelajar  $jadwalbelajar
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalBelajar $jadwalbelajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JadwalBelajar  $jadwalbelajar
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $jadwalbelajar = JadwalBelajar::find($id);
        $data['jadwalbelajar'] = $jadwalbelajar;
        $data['action'] = 'jadwalbelajar/update';
        return view('jadwalbelajar.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JadwalBelajar  $jadwalbelajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $jadwalbelajar = JadwalBelajar::find($request->id);
        $jadwalbelajar->hari = $request->hari;
        $jadwalbelajar->pengajar = $request->pengajar;
        $jadwalbelajar->mata_pelajaran = $request->mata_pelajaran;
        $jadwalbelajar->durasi_belajar = $request->durasi_belajar;
        $jadwalbelajar->save();
        return redirect('/jadwalbelajar');
    }

    public function delete($id)
    {
        $jadwalbelajar = JadwalBelajar::find($id);
        $jadwalbelajar->delete();
        return redirect('/jadwalbelajar');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JadwalBelajar  $jadwalbelajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalBelajar $jadwalbelajar)
    {
        //
    }
}
