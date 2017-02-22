<?php $__env->startSection('content'); ?>

<center><h1>Data Golongan</h1></center>
<hr>
	<div class="col-md-12">
		<table class="table table-striped table-bordered table-hover">
			<!-- <table class="table table-default"> -->
				<tr class="danger">

			<a href="<?php echo e(url('/golongan/create')); ?>" class="btn btn-success form-control">Tambah Data</a><br><br>
			<?php echo e($golongan->links()); ?>

			
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
		<?php 
		$no=1;
		 ?>
		<?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><center><?php echo e($no++); ?></center></td>
			<td><center><?php echo e($golongans->kode_golongan); ?></center></td>
			<td><center><?php echo e($golongans->nama_golongan); ?></center></td>
			<?php $golongans->besaran_uang=number_format($golongans->besaran_uang,2,',','.') ?>
            <td><center><?php echo e($golongans->besaran_uang); ?></center></td>
			
		<td><a href="<?php echo e(route('golongan.edit',$golongans->id)); ?>" class="btn btn-warning">Update</a></td>	
		</td>
		<th>
                                    <?php echo Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$golongans->id]]); ?>

                                    <?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>

                                    <?php echo Form::close(); ?>

                                </th>
		</tr>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

	</tbody>
</table>
<hr>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>