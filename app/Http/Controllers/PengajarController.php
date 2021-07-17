<?php

namespace App\Http\Controllers;

use App\Pengajar;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajars = Pengajar::all();
        $data['pengajar'] = $pengajars;
        return view('pengajar.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["action"] = 'pengajar.store';
        return view('pengajar.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengajar = new Pengajar();
        $pengajar->nama_pengajar = $request->nama_pengajar;
        $pengajar->alamat_pengajar = $request->alamat_pengajar;
        $pengajar->alamat_pengajar = $request->alamat_pengajar;
        $pengajar->pendidikan_terakhir = $request->pendidikan_terakhir;
        $pengajar->save();
        return redirect('/pengajar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajar $pengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "")
    {
        $pengajar = Pengajar::find($id);
        $data['pengajar'] = $pengajar;
        $data['action'] = 'pengajar/update';        
        return view('pengajar.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengajar $pengajar)
    {
        $pengajar = Pengajar::find($request->id);
        $pengajar->nama_pengajar = $request->nama_pengajar;
        $pengajar->alamat_pengajar = $request->alamat_pengajar;
        $pengajar->alamat_pengajar = $request->alamat_pengajar;
        $pengajar->pendidikan_terakhir = $request->pendidikan_terakhir;
        $pengajar->save();
        return redirect('/pengajar');
    }

    public function delete($id)
    {
        $pengajar = Pengajar::find($id);
        $pengajar->delete();
        return redirect('/pengajar');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengajar $pengajar)
    {
        //
    }
}
