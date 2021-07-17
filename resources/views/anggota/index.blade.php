@extends('master')
@section('judul', 'Data Anggota')
@section('content')

<a href="{{ url('anggota/create')}}" class="btn btn-primary">Tambah Data</a><hr/>
<hr>
<table id = data_anggota class="table table-borderless table-striped table-earning">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Mata Pelajaran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($anggota as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->nama_anggota}}</td>
            <td>{{$value->alamat_anggota}}</td>
            <td>{{$value->asal_sekolah}}</td>
            <td>{{$value->mata_pelajaran}}</td>
            <td><a href="{{url('anggota/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
            <a href="{{url('anggota/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>     
        </tr>
        @endforeach
    </tbody>
</table>  
@endsection    
@section('js')

<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>


<script>
  $(function () {
    $("#data_anggota").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection