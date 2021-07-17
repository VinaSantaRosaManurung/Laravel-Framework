@extends('master')
@section('judul', 'Form Anggota')
@section('content')

<form role="form" action="{{($action!='anggota.store') ? url($action): route($action) }}" method="POST">
{{ csrf_field() }}
    <input type="hidden" name="id" value="{{ ($action!='anggota.store') ? $anggota->id : '' }}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Anggota</label>
                      <input type="text" class="form-control" name="nama_anggota" 
                        value="{{ ($action!='anggota.store') ? $anggota->nama_anggota : ''}}" placeholder="Nama Anggota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Anggota</label>
                      <input type="text" class="form-control" name="alamat_anggota" 
                        value="{{ ($action!='anggota.store') ? $anggota->alamat_anggota : ''}}" placeholder="Alamat Anggota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Asal Sekolah</label>
                      <input type="text" class="form-control" name="asal_sekolah" 
                        value="{{ ($action!='anggota.store') ? $anggota->asal_sekolah : ''}}" placeholder="Asal Sekolah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mata Pelajaran</label>
                      <input type="text" class="form-control" name="mata_pelajaran" 
                        value="{{ ($action!='anggota.store') ? $anggota->mata_pelajaran : ''}}" placeholder="Mata Pelajaran">
                  </div>
                </div>
            <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-success" value="{{ ($action!='anggota.store') ? 'Update' : 'Simpan' }}">
                </div>
            <!-- /.card-footer -->    
              </form>
@endsection