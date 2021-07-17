@extends('master')
@section('judul', 'Data Jadwal Belajar')
@section('content')

<a href="{{ url('jadwalbelajar/create')}}" class="btn btn-primary">Tambah Data</a><hr/>
<hr>
<table id = data_jadwalbelajar class="table table-borderless table-striped table-earning">
    <thead>
        <tr>
            <th>No.</th>
            <th>Hari</th>
            <th>Pengajar</th>
            <th>Mata Pelajaran</th>
            <th>Durasi Pelajaran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jadwalbelajar as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->hari}}</td>
            <td>{{$value->pengajar}}</td>
            <td>{{$value->mata_pelajaran}}</td>
            <td>{{$value->durasi_belajar}}</td>
            <td><a href="{{url('jadwalbelajar/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
            <a href="{{url('jadwalbelajar/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>     
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
    $("#data_jadwalbelajar").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection