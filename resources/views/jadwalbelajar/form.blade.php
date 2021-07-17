@extends('master')
@section('judul', 'Form Jadwal Belajar')
@section('content')

<form role="form" action="{{($action!='jadwalbelajar.store') ? url($action): route($action) }}" method="POST">
{{ csrf_field() }}
    <input type="hidden" name="id" value="{{ ($action!='jadwalbelajar.store') ? $jadwalbelajar->id : '' }}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hari</label>
                      <input type="text" class="form-control" name="hari" 
                        value="{{ ($action!='jadwalbelajar.store') ? $jadwalbelajar->hari : ''}}" placeholder="Hari">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pengajar</label>
                      <input type="text" class="form-control" name="pengajar" 
                        value="{{ ($action!='jadwalbelajar.store') ? $jadwalbelajar->pengajar : ''}}" placeholder="Pengajar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mata Pelajaran</label>
                      <input type="text" class="form-control" name="mata_pelajaran" 
                        value="{{ ($action!='jadwalbelajar.store') ? $jadwalbelajar->mata_pelajaran : ''}}" placeholder="Mata Pelajaran">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Durasi Belajar</label>
                      <input type="text" class="form-control" name="durasi_belajar" 
                        value="{{ ($action!='jadwalbelajar.store') ? $jadwalbelajar->durasi_belajar : ''}}" placeholder="Durasi Belajar">
                  </div>
                </div>
            <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-success" value="{{ ($action!='jadwalbelajar.store') ? 'Update' : 'Simpan' }}">
                </div>
            <!-- /.card-footer -->    
              </form>
@endsection