@extends('master')
@section('judul', 'Form Mata Pelajaran')
@section('content')

<form role="form" action="{{($action!='mata_pelajaran.store') ? url($action): route($action) }}" method="POST">
{{ csrf_field() }}
  <input type="hidden" name="id" value="{{ ($action!='mata_pelajaran.store') ? $mata_pelajaran->id : '' }}">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Jenis Mata Pelajran</label>
            <input type="text" class="form-control" name="jenis_matapelajaran" 
              value="{{ ($action!='mata_pelajaran.store') ? $mata_pelajaran->jenis_matapelajaran : ''}}" placeholder="Jenis Mata Pelajran">
                </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Mata Pelajaran</label>
            <input type="text" class="form-control" name="nama_matapelajaran" 
              value="{{ ($action!='mata_pelajaran.store') ? $mata_pelajaran->nama_matapelajaran : ''}}" placeholder="Nama Mata Pelajaran">
                </div>
                <div class="form-group">
        <label for="exampleInputEmail1">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" 
              value="{{ ($action!='mata_pelajaran.store') ? $mata_pelajaran->keterangan : ''}}" placeholder="Keterangan">
              </div>
                <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
            <input type="text" class="form-control" name="status" 
              value="{{ ($action!='mata_pelajaran.store') ? $mata_pelajaran->status : ''}}" placeholder="Status">
                </div>
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
                  <input type="submit" class="btn btn-success" value="{{ ($action!='mata_pelajaran.store') ? 'Update' : 'Simpan' }}">
                </div>
            <!-- /.card-footer -->    
              </form>
@endsection