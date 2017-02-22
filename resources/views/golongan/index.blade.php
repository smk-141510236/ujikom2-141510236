@extends('layouts/app')
@section('content')

<div class="panel panel-default">
  <div class="panel-body">
	<div class="col-md-12">
<center><h1>Data Golongan</h1></center>
<hr>
		<table class="table table-striped table-bordered table-hover">
			<!-- <table class="table table-default"> -->
				<tr class="danger">

			<a href="{{url('/golongan/create')}}" class="btn btn-success form-control">Tambah Data</a><br><br>
			{{$golongan->links()}}
			
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Kode Golongan</center></th>
		<th><center>Nama Golongan</center></th>
		<th><center>Besaran Uang</center></th>
		
		<th colspan="3"><center>Action</center></th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($golongan as $golongans)
		<tr>
			<td><center>{{$no++}}</center></td>
			<td><center>{{$golongans->kode_golongan}}</center></td>
			<td><center>{{$golongans->nama_golongan}}</center></td>
			<?php $golongans->besaran_uang=number_format($golongans->besaran_uang,2,',','.') ?>
            <td><center>{{$golongans->besaran_uang}}</center></td>
			
		<td><a href="{{route('golongan.edit',$golongans->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<th>
                                    {!!Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$golongans->id]])!!}
                                    {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                                    {!!Form::close()!!}
                                </th>
		</tr>
		
		@endforeach

	</tbody>
</table>
</tr></table></div></div></div>
<hr>




@endsection