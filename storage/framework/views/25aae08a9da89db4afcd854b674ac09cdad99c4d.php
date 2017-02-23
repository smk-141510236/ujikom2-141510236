<?php $__env->startSection('content'); ?>
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

										<?php 
										$no = 1;
										 ?>
										<?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
										<tbody>
											<tr>
												<td><?php echo e($no++); ?></td>
												<td><?php echo e($data->tunjangan_pegawaiModel->pegawaiModel-User-name); ?></td>
												<td><?php echo e($data->jumlah_jam_lembur); ?></td>
												<td><?php echo e($data->jumlah_uang_lembur); ?></td>
												<td><?php echo e($data->gaji_pokok); ?></td>
												<td><?php echo e($data->total_gaji); ?></td>
												<td><?php echo e($data->updated_at); ?></td>
													
													$if($data->status_pengembalian == 0)
												
													<td>Belum Diambil</td>
													
													<?php endif; ?>

													<?php if($data->petugas_pengambilan == 1): ?>
												
													<td>Sudah Diambil</td>
													
													<?php endif; ?>
												<td><?php echo e($data->petugas_penerima); ?></td>
											</tr>
											
										</tbody>
	
									</table>
				                </div>
				            </div>
				        </div>
	        		</div>
        	</div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>