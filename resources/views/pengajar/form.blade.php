@extends('master')
@section('judul', 'Form Pengajar')
@section('content')

<form role="form" action="{{($action!='pengajar.store') ? url($action): route($action) }}" method="POST">
{{ csrf_field() }}
  <input type="hidden" name="id" value="{{ ($action!='pengajar.store') ? $pengajar->id : '' }}">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Pengajar</label>
            <input type="text" class="form-control" name="nama_pengajar" 
              value="{{ ($action!='pengajar.store') ? $pengajar->nama_pengajar : ''}}" placeholder="Nama Pengajar">
                </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Alamat Pengajar</label>
            <input type="text" class="form-control" name="alamat_pengajar" 
              value="{{ ($action!='pengajar.store') ? $pengajar->alamat_pengajar : ''}}" placeholder="Alamat Pengajar">
                </div>
                <div class="form-group">
        <label for="exampleInputEmail1">Pendidikan Terakhir</label>
            <input type="text" class="form-control" name="pendidikan_terakhir" 
              value="{{ ($action!='pengajar.store') ? $pengajar->pendidikan_terakhir : ''}}" placeholder="Pendidikan Terakhir">
                </div>
              </div>
            <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-success" value="{{ ($action!='pengajar.store') ? 'Update' : 'Simpan' }}">
                </div>
            <!-- /.card-footer -->    
              </form>
@endsection