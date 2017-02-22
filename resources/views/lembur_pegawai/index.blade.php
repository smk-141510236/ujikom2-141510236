@extends('layouts/app')
@section('content')
<div class="panel panel-default">
  <div class="panel-body">
<div class="col-md-12 ">
<center><h1>Data Lembur Pegawai</h1>
	<table class="table table-striped table-bordered table-hover">
<!-- <table class="table table-default"> -->
<hr>
<tr class="danger">

<a href="{{url('/lembur_pegawai/create')}}" class="btn btn-success form-control">Tambah Data</a>
<br><br>
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Kode Lembur </center></th>
		<th colspan="2"><center> Nip Dan Nama Pegawai</center></th>
		<th colspan="2"><center> Jabatan dan Golongan</center></th>
		<th><center>Jumlah Jam</center></th>
		
		<th colspan="3"><center>Action</center></th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($lembur_pegawai as $lembur_pegawais)
		<tr>
			<td><center>{{$no++}}</center></td>
			<td><center>{{$lembur_pegawais->kode_lembur_id}}</center></td>
			<td><center>{{$lembur_pegawais->pegawaiModel->nip}}</center></td>
			<td><center>{{$lembur_pegawais->pegawaiModel->user->name}}</center></td>
			<td><center>{{$lembur_pegawais->pegawaiModel->jabatanModel->nama_jabatan}}</center></td>
			<td><center>{{$lembur_pegawais->pegawaiModel->golonganModel->nama_golongan}}</center></td>
			<td><center>{{$lembur_pegawais->jumlah_jam}}</center></td>
			
		<td><a href="{{route('lembur_pegawai.edit',$lembur_pegawais->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['lembur_pegawai.destroy',$lembur_pegawais->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>
</tr></table></center></div></div></div>
<hr>



@endsection