@extends('layouts/app')
@section('content')


<div class="panel panel-default">
  <div class="panel-body">
	<table class="table table-striped table-bordered table-hover">
<div class="col-md-12 ">
<center><h1>Data Tunjangan</h1>

<!-- <table class="table table-default"> -->
<hr>
<tr class="danger">
<a href="{{url('/tunjangan/create')}}" class="btn btn-success form-control">Tambah Data</a>
<br><br>
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Kode Tunjangan</center></th>
		<th><center>Jabatan </center></th>
		<th><center>Golongan </center></th>
		<th><center>Status</center></th>
		<th><center>Jumlah Anak</center></th>
		<th><center>Besaran Uang</center></th>
		<th colspan="3"><center>Action</center></th>
	</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($tunjangan as $tunjangans)
		<tr>
			<td><center>{{$no++}}</center></td>
			<td><center>{{$tunjangans->kode_tunjangan}}</center></td>
			<td><center>{{$tunjangans->jabatanModel->nama_jabatan}}</center></td>
			<td><center>{{$tunjangans->golonganModel->nama_golongan}}</center></td>
			<td><center>{{$tunjangans->status}}</center></td>
			<td><center>{{$tunjangans->jumlah_anak}}</center></td>
			<?php $tunjangans->besaran_uang=number_format($tunjangans->besaran_uang,2,',','.') ?>
			<td><center>{{$tunjangans->besaran_uang}}</center></td>


		<td><a href="{{route('tunjangan.edit',$tunjangans->id)}}"class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['tunjangan.destroy',$tunjangans->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>
</tr></div></table></div></div></center>




@endsection