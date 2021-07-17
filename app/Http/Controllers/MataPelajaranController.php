<?php

namespace App\Http\Controllers;

use App\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matapelajarans = MataPelajaran::all();
        $data['mata_pelajaran'] = $matapelajarans;
        return view('mata_pelajaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['action'] = 'mata_pelajaran.store';
        return view ('mata_pelajaran.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mata_pelajaran = new MataPelajaran;
        $mata_pelajaran->jenis_matapelajaran = $request->jenis_matapelajaran;
        $mata_pelajaran->nama_matapelajaran = $request->nama_matapelajaran;
        $mata_pelajaran->keterangan = $request->keterangan;
        $mata_pelajaran->status = $request->status;
        $mata_pelajaran->save();

        return redirect('/mata_pelajaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MataPelajaran  $mata_pelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(MataPelajaran $mata_pelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MataPelajaran  $mata_pelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $mata_pelajaran = MataPelajaran::find($id);
        $data['mata_pelajaran'] = $mata_pelajaran;
        $data['action'] = 'mata_pelajaran/update';
        return view('mata_pelajaran.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MataPelajaran  $matapelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $mata_pelajaran = MataPelajaran::find($request->id);
        $mata_pelajaran->jenis_matapelajaran = $request->jenis_matapelajaran;
        $mata_pelajaran->nama_matapelajaran = $request->nama_matapelajaran;
        $mata_pelajaran->keterangan = $request->keterangan;
        $mata_pelajaran->status = $request->status;
        $mata_pelajaran->save();
        return redirect('/mata_pelajaran');
    }

    public function delete($id)
    {
        $mata_pelajaran = MataPelajaran::find($id);
        $mata_pelajaran->delete();
        return redirect('/mata_pelajaran');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MataPelajaran  $mata_pelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataPelajaran $mata_pelajaran)
    {
        //
    }
}
