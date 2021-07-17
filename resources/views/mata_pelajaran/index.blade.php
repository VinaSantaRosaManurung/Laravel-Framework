@extends('master')
@section('judul', 'Data Mata Pelajaran')
@section('content')

<a href="{{ url('mata_pelajaran/create')}}" class="btn btn-primary">Tambah Data</a><hr/>
<hr>
<table id = data_mata_pelajaran class="table table-borderless table-striped table-earning">
    <thead>
        <tr>
            <th>No.</th>
            <th>Jenis</th>
            <th>Mapel</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mata_pelajaran as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->jenis_matapelajaran}}</td>
            <td>{{$value->nama_matapelajaran}}</td>
            <td>{{$value->keterangan}}</td>
            <td>{{$value->status}}</td>
            <td><a href="{{url('mata_pelajaran/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
            <a href="{{url('mata_pelajaran/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>     
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
    $("#data_mata_pelajaran").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection