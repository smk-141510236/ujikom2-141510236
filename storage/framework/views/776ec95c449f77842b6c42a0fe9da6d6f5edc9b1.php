<?php $__env->startSection('content'); ?>

<div class="col-md-12 ">
<center><h1>Data Lembur Pegawai</h1>
	<table class="table table-striped table-bordered table-hover">
<!-- <table class="table table-default"> -->
<hr>
<tr class="danger">

<a href="<?php echo e(url('/lembur_pegawai/create')); ?>" class="btn btn-success form-control">Tambah Data</a>
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
		<?php 
		$no=1;
		 ?>
		<?php $__currentLoopData = $lembur_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lembur_pegawais): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<td><center><?php echo e($lembur_pegawais->kode_lembur_id); ?></center></td>
			<td><center><?php echo e($lembur_pegawais->pegawaiModel->nip); ?></center></td>
			<td><center><?php echo e($lembur_pegawais->pegawaiModel->user->name); ?></center></td>
			<td><center><?php echo e($lembur_pegawais->pegawaiModel->jabatanModel->nama_jabatan); ?></center></td>
			<td><center><?php echo e($lembur_pegawais->pegawaiModel->golonganModel->nama_golongan); ?></center></td>
			<td><center><?php echo e($lembur_pegawais->jumlah_jam); ?></center></td>
			
		<td><a href="<?php echo e(route('lembur_pegawai.edit',$lembur_pegawais->id)); ?>" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		<?php echo Form::open(['method'=>'DELETE','route'=>['lembur_pegawai.destroy',$lembur_pegawais->id]]); ?>

		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		<?php echo Form::close(); ?>

		</td>
		</tr>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

	</tbody>
</table>
<hr>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>