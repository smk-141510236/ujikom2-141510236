@extends('layouts/app')
@section('content')

<div class="panel panel-default">
  <div class="panel-body">
<div class="col-md-12 ">
<center><h1>Data Pegawai</h1></center>
<table class="table table-striped table-bordered table-hover">
<!-- <table class="table table-default"> -->
<tr class="danger">
        <div class="panel-body">
                <div class="form-group"><center>
                    <form action="{{url('/pegawai')}}/?name=name">
                    <input type="text" name="name" placeholder="Cari">
                    <input class="btn btn-sm btn-primary" type="submit" value="Cari" /></form>
                </center></div>

<a href="{{url('/pegawai/create')}}" class="btn btn-success form-control">Tambah Data</a>
<br><br>
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Nip</center></th>
		<th><center>Nama</center></th>
		<th><center>Email</center></th>
		<th><center>Permision</center></th>
		<th colspan="2"> <center>Jabatan dan golongan</center></th>
		<th><center>Foto</center></th>
		<th colspan="3"><center>Action</center></th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($pegawai as $pegawais)
		<tr><center>
			<td><center>{{$no++}}</center></td>
			<td><center>{{$pegawais->nip}}</center></td>
			<td><center>{{$pegawais->User->name}}</center></td>
			<td><center>{{$pegawais->User->email}}</center></td>
			<td><center>{{$pegawais->User->permision}}</center></td>
			<td><center>{{$pegawais->jabatanModel->nama_jabatan}}</center></td>
			<td><center>{{$pegawais->golonganModel->nama_golongan}}</center></td>
			
	   <th><img  width="50px" height="50px" class="img-circle" src="assets/image/{{$pegawais->foto}}"></th>

		<td><a href="{{route('pegawai.edit',$pegawais->id)}}"class="btn btn-warning">Update</td>	
		</td>

		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['pegawai.destroy',$pegawais->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		</div>
		@endforeach

	</tbody>
</table>
{{$searchuser->links()}}
</a></td></center></tr></tbody></div></tr></table></div></div></div>



@endsection