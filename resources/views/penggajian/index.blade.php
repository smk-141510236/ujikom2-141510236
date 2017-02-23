@extends('layouts/app')
@section('content')
<div class="panel panel-default">
  <div class="panel-body">
	<div class="col-md-12 ">
		<center><h1>Data Penggajian</h1>
			<table class="table table-striped table-bordered table-hover">
			    <hr>
				<tr class="danger">
	            
										<thead >
											<tr class="bg-info">
												<th><center>No</center></th>
												<th><center>Pegawai</center></th></center>
												<th><center>Jumlah Jam Lembur</center></th>
												<th><center>Jumlah Uang Tunjangan</center></th>
												<th><center>Jumlah Uang Lembur</center></th>
												<th><center>Gaji Pokok</center></th>
												<th><center>Total Gaji</center></th>
												<th><center>Tanggal Pengambilan</center></th>
												<th><center>Status Pengambilan</center></th>
												<th><center>Petugas Penerimaan</center></th>
												<th></th>
												<th colspan="3"><center>Action</center></th>
											</tr>
										</thead>

										@php
										$no = 1;
										@endphp
										@foreach($penggajian as $data)
										<tbody>
											<tr>
												<td>{{$no++}}</td>
												<td>{{$data->tunjangan_pegawaiModel->pegawaiModel-User-name}}</td>
												<td>{{$data->jumlah_jam_lembur}}</td>
												<td>{{$data->jumlah_uang_lembur}}</td>
												<td>{{$data->gaji_pokok}}</td>
												<td>{{$data->total_gaji}}</td>
												<td>{{$data->updated_at}}</td>
													
													$if($data->status_pengembalian == 0)
												
													<td>Belum Diambil</td>
													
													@endif

													@if($data->petugas_pengambilan == 1)
												
													<td>Sudah Diambil</td>
													
													@endif
												<td>{{$data->petugas_penerima}}</td>
											</tr>
											
										</tbody>
	
									</table>
				                </div>
				            </div>
				        </div>
	        		</div>
        	</div>
        </div>
@endsection