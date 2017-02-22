<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit Golongan</h1></div>
                <div class="panel-body">

                     <?php echo Form::model($golongan,['method'=>'PATCH','route'=>['golongan.update',$golongan->id]]); ?>

                    <div class="col-md-6">
                    <label>Kode Golongan</label>
                        <input type="text" name="kode_golongan" class="form-control" value="<?php echo e($golongan->kode_golongan); ?>">
                        <span>
                            <?php echo e($errors->first('kode_golongan')); ?>

                        </span>
                    </div>
                    <div class="col-md-6">
                        <?php echo Form::label('Nama golongan', 'Nama golongan'); ?>

                        <input type="text" name="nama_golongan" class="form-control" value="<?php echo e($golongan->nama_golongan); ?>">
                        <span>
                            <?php echo e($errors->first('nama_golongan')); ?>

                        </span>
                    </div>
                    <div class="col-md-12">
                        <?php echo Form::label('besaran uang', 'besaran uang'); ?>

                        <input type="text" name="besaran_uang" class="form-control" value="<?php echo e($golongan->besaran_uang); ?>">
                        <span>
                            <?php echo e($errors->first('besaran_uang')); ?>

                        </span>
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