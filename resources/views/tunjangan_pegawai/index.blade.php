@extends('layouts/app')
@section('content')

<div class="panel panel-default">
  <div class="panel-body">
<div class="col-md-12 ">
<center><h1>Data Tunjangan Pegawai</h1>
	<table class="table table-striped table-bordered table-hover">
<!-- <table class="table table-default"> -->

<tr class="danger">
<hr>
<a href="{{url('/tunjangan_pegawai/create')}}" class="btn btn-success form-control">Tambah Data</a><br><br>

	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Kode Tunjangan</center></th>
		<th><center>Pegawai_ID</center></th>
		<th colspan="2"><center>Action</<center></th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($tunjangan_pegawai as $tunjangan_pegawais)
		<tr>
			<td><center>{{$no++}}</center></td>
			<td><center>{{$tunjangan_pegawais->tunjanganModel->kode_tunjangan}}</center></td>
			<td><center>{{$tunjangan_pegawais->pegawaiModel->User->name}}</center></td>

		<td><a href="{{route('tunjangan_pegawai.edit',$tunjangan_pegawais->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['tunjangan_pegawai.destroy',$tunjangan_pegawais->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>
</center></center></th></tr></thead></tr></table></center></div></div></div>
<hr>



@endsection