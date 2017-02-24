<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Tambah Jabatan</h1></div>
                <div class="panel-body">

                     <?php echo Form::open(['url' => 'jabatan']); ?>

                    <div class="col-md-6">
                        <?php echo Form::label('kode jabatan', 'kode jabatan'); ?>

                        <?php echo Form::text('kode_jabatan',null,['class'=>'form-control']); ?>

                         <?php if($errors->has('kode_jabatan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('kode_jabatan')); ?></strong>
                                    </span>
                                <?php endif; ?>


                    </div>
                    <div class="col-md-6 ">
                        <?php echo Form::label('Nama jabatan', 'Nama jabatan'); ?>

                        <?php echo Form::text('nama_jabatan',null,['class'=>'form-control']); ?>

                         <?php if($errors->has('nama_jabatan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nama_jabatan')); ?></strong>
                                    </span>
                                <?php endif; ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo Form::label('besaran uang', 'besaran uang'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control']); ?>

                         <?php if($errors->has('besaran_uang')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('besaran_uang')); ?></strong>
                                    </span>
                                <?php endif; ?>

                    </div>

                    <div class="col-md-12">

                    </div>

                    <div class="col-md-12">
                        <?php echo Form::submit('SAVE', ['class' => 'btn btn-primary form-control']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>