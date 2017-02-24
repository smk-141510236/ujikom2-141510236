<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Tunjangan</div>
                <div class="panel-body">

                     <?php echo Form::open(['url' => 'tunjangan']); ?>

                    <div class="col-md-6">
                        <?php echo Form::label('Jabatan', 'Jabatan'); ?>

        
                         <select name="jabatan_id" class="form-control">
                                <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($jabatans->id); ?>">
                                        <?php echo e($jabatans->nama_jabatan); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                    </div>
                    <div class="col-md-6">
                        <?php echo Form::label('Golongan', 'Golongan'); ?>

                        
                        <select name="golongan_id" class="form-control">
                                <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($golongans->id); ?>">
                                        <?php echo e($golongans->nama_golongan); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                    </div>

                    <div class="col-md-6">

                                <label>Kode Tunjangan</label>
                                <input type="text" class="form-control" name="kode_tunjangan" autofocus>

                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('kode_tunjangan')); ?></strong>
                                    </span>
                            </div>

                    <div class="col-md-6">
                        <label >Status</label>

                        <select class="form-control" class="col-md-8" form="form-control" name="status">
                        <option value="menikah">Menikah</option>
                        <option value="belum_menikah">Belum Menikah</option>
                        <option value="janda">Janda</option>
                        <option value="duda">Duda</option>
                        </select>
                    </div>

                    <div class="col-md-7">
                        <?php echo Form::label('Jumlah Anak', 'Jumlah Anak'); ?>

                        <?php echo Form::text('jumlah_anak',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="col-md-7">
                        <?php echo Form::label('Besaran Uang', 'Besaran Uang'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="col-md-12" >
                                <button type="submit" class="btn btn-primary form-control">Tambah</button>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>