<?php $__env->startSection('content'); ?>


<div class="panel panel-default">
  <div class="panel-body">
	<table class="table table-striped table-bordered table-hover">
<div class="col-md-12 ">
<center><h1>Data Tunjangan</h1>

<!-- <table class="table table-default"> -->
<hr>
<tr class="danger">
<a href="<?php echo e(url('/tunjangan/create')); ?>" class="btn btn-success form-control">Tambah Data</a>
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
		<?php 
		$no=1;
		 ?>
		<?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tunjangans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<td><center><?php echo e($tunjangans->kode_tunjangan); ?></center></td>
			<td><center><?php echo e($tunjangans->jabatanModel->nama_jabatan); ?></center></td>
			<td><center><?php echo e($tunjangans->golonganModel->nama_golongan); ?></center></td>
			<td><center><?php echo e($tunjangans->status); ?></center></td>
			<td><center><?php echo e($tunjangans->jumlah_anak); ?></center></td>
			<?php $tunjangans->besaran_uang=number_format($tunjangans->besaran_uang,2,',','.') ?>
			<td><center><?php echo e($tunjangans->besaran_uang); ?></center></td>


		<td><a href="<?php echo e(route('tunjangan.edit',$tunjangans->id)); ?>"class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		<?php echo Form::open(['method'=>'DELETE','route'=>['tunjangan.destroy',$tunjangans->id]]); ?>

		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		<?php echo Form::close(); ?>

		</td>
		</tr>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

	</tbody>
</table>
</tr></div></table></div></div></center>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>