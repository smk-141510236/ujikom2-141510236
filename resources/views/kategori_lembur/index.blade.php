@extends('layouts/app')
@section('content')

<div class="panel panel-default">
  <div class="panel-body">
<div class="col-md-12 ">
<center><h1>Data Kategori Lembur</h1>
    <table class="table table-striped table-bordered table-hover">
<!-- <table class="table table-default"> -->
<hr>
<tr class="danger">


<a href="{{url('/kategori_lembur/create')}}" class="btn btn-success form-control">Tambah Data</a>
<br><br>
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Kode Lembur</center></th>
		<th><center>Jabatan </center></th>
		<th><center>Golongan </center></th>
		<th><center>Besaran Uang </center></th>
		<th colspan="3"><center>Action</center></th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($kategori_lembur as $kategori_lemburs)
		<tr><center>
			<td><center>{{$no++}}</center></td>
			<td><center>{{$kategori_lemburs->kode_lembur}}</center></td>
			<td><center>{{$kategori_lemburs->jabatanModel->nama_jabatan}}</center></td>
			<td><center>{{$kategori_lemburs->golonganModel->nama_golongan}}</center></td>
			<?php $kategori_lemburs->besaran_uang=number_format($kategori_lemburs->besaran_uang,2,',','.') ?>
            <td><center>{{$kategori_lemburs->besaran_uang}}</center></td>
			
		<td><a href="{{route('kategori_lembur.edit',$kategori_lemburs->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['kategori_lembur.destroy',$kategori_lemburs->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		</div>
		@endforeach

	</tbody>
</table>
</center></tr></tbody></tr></table></center></div></div></div>
<hr>

@endsection