@extends('layouts/app')
@section('content')


<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-12 ">
<center><h1>Data Jabatan</h1></center>
<hr>
    <table class="table table-striped table-bordered table-hover">
    <!-- <table class="table table-default"> -->
			<tr class="danger">
				<a href="{{url('/jabatan/create')}}" class="btn btn-success form-control">Tambah Data</a><br><br>
				{{$jabatan->links()}}

	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Kode Jabatan</center></th>
		<th><center>Nama Jabatan</center></th>
		<th><center>Besaran Uang</center></th>
		
		<th colspan="3"><center>Action</center></th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($jabatan as $jabatans)
		<tr>
			<td><center>{{$no++}}</center></td>
			<td><center>{{$jabatans->kode_jabatan}}</center></td>
			<td><center>{{$jabatans->nama_jabatan}}</center></td>
			<?php $jabatans->besaran_uang=number_format($jabatans->besaran_uang,2,',','.') ?>
			<td><center>{{$jabatans->besaran_uang}}</center></td>
			
		<td><a href="{{route('jabatan.edit',$jabatans->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>

		{!!Form::open(['method'=>'DELETE','route'=>['jabatan.destroy',$jabatans->id]])!!}
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>
</tr></table></div></div></div>
<hr>



@endsection