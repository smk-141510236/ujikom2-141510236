<?php $__env->startSection('content'); ?>



<center><h1>Data Jabatan</h1></center>
<hr>
    <div class="col-md-12 ">
    <table class="table table-striped table-bordered table-hover">
    <!-- <table class="table table-default"> -->
			<tr class="danger">
				<a href="<?php echo e(url('/jabatan/create')); ?>" class="btn btn-success form-control">Tambah Data</a><br><br>
				<?php echo e($jabatan->links()); ?>


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
		<?php 
		$no=1;
		 ?>
		<?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<td><center><?php echo e($jabatans->kode_jabatan); ?></center></td>
			<td><center><?php echo e($jabatans->nama_jabatan); ?></center></td>
			<?php $jabatans->besaran_uang=number_format($jabatans->besaran_uang,2,',','.') ?>
			<td><center><?php echo e($jabatans->besaran_uang); ?></center></td>
			
		<td><a href="<?php echo e(route('jabatan.edit',$jabatans->id)); ?>" class="btn btn-warning">Update</a></td>	
		</td>
		<td>

		<?php echo Form::open(['method'=>'DELETE','route'=>['jabatan.destroy',$jabatans->id]]); ?>

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