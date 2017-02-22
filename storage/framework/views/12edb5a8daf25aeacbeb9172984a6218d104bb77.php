<?php $__env->startSection('content'); ?>


<div class="col-md-12 ">
<center><h1>Data Tunjangan Pegawai</h1>
	<table class="table table-striped table-bordered table-hover">
<!-- <table class="table table-default"> -->

<tr class="danger">
<hr>
<a href="<?php echo e(url('/tunjangan_pegawai/create')); ?>" class="btn btn-success form-control">Tambah Data</a><br><br>

	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Kode Tunjangan</center></th>
		<th><center>Pegawai_ID</center></th>
		<th colspan="2"><center>Action</<center></th>
			
		</tr>
	</thead>
	<tbody>
		<?php 
		$no=1;
		 ?>
		<?php $__currentLoopData = $tunjangan_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tunjangan_pegawais): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<td><center><?php echo e($tunjangan_pegawais->tunjanganModel->kode_tunjangan); ?></center></td>
			<td><center><?php echo e($tunjangan_pegawais->pegawaiModel->User->name); ?></center></td>

		<td><a href="<?php echo e(route('tunjangan_pegawai.edit',$tunjangan_pegawais->id)); ?>" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		<?php echo Form::open(['method'=>'DELETE','route'=>['tunjangan_pegawai.destroy',$tunjangan_pegawais->id]]); ?>

		
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