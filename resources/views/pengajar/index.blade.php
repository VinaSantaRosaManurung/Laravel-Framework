@extends('master')
@section('judul', 'Data Pengajar')
@section('content')

<a href="{{ url('pengajar/create')}}" class="btn btn-primary">Tambah Data</a><hr/>
<hr>
<table id = data_pengajar class="table table-borderless table-striped table-earning">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pengajar</th>
            <th>Alamat Pengajar</th>
            <th>Pendidikan Terakhir</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengajar as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->nama_pengajar}}</td>
            <td>{{$value->alamat_pengajar}}</td>
            <td>{{$value->pendidikan_terakhir}}</td>
            <td><a href="{{url('pengajar/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
            <a href="{{url('pengajar/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>     
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
    $("#data_pengajar").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection