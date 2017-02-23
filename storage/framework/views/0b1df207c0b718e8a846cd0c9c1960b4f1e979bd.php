<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit Jabatan</h1></div>
                <div class="panel-body">
                     <?php echo Form::model($tunjangan,['method'=>'PATCH','route'=>['tunjangan.update',$tunjangan->id]]); ?>

                    
                    <div class="col-md-6">
                         <label for="kode_tunjangan" >Kode Tunjangan</label>
                         <input id="kode_tunjangan" value="<?php echo e($tunjangan->kode_tunjangan); ?>" type="text" class="form-control" name="kode_tunjangan" autofocus>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('kode_tunjangan')); ?></strong>
                                    </span>
                    </div>
                    <div class="col-md-6">
                                <label>Jabatan Lama</label>
                                <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datajabatan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <?php if($datajabatan->id == $tunjangan->jabatan_id): ?>
                                    <input type="text" class ="form-control" value="<?php echo e($datajabatan->nama_jabatan); ?>" readonly>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                   </div>

                            <div class="col-md-6">
                                <label>Golongan Lama</label>
                                <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datagolongan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <?php if($datagolongan->id == $tunjangan->golongan_id): ?>
                                    <input type="text" class ="form-control" value="<?php echo e($datagolongan->nama_golongan); ?>" readonly>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </div>

                            <div class="col-md-6">
                                <label for="Jabatan">Jabatan</label>
                                    <select class="col-md-8 form-control" name="jabatan_id">
                                    <option>Pilih Jabatan Baru</option>
                                        <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datajabatan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <option  value="<?php echo e($datajabatan->id); ?>" ><?php echo e($datajabatan->nama_jabatan); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </select>
                                    <span><?php echo e($errors->first('jabatan_id')); ?></span>
                            </div>

                            <div class="col-md-6">
                                <label for="Jabatan">Golongan</label>
                                    <select class="col-md-8 form-control" name="golongan_id">
                                    <option>Pilih Golongan Baru</option>
                                        <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datagolongan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <option  value="<?php echo e($datagolongan->id); ?>" ><?php echo e($datagolongan->nama_golongan); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </select>
                                    <span class="help-block">
                                        <?php echo e($errors->first('golongan_id')); ?>

                                    </span>
                            </div>

                    
                                
                    <div class="col-md-6">
                        <label for="status">status</label>
                        <select class="col-md-8 form-control" name="status">
                        <option name="status">menikah</option>
                        <option name="status">belum menikah</option>
                        </select>
                    </div>
                            

                    <div class="col-md-6">
                        <?php echo Form::label('jumlah anak', 'jumlah anak'); ?>

                        <?php echo Form::text('jumlah_anak',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo Form::label('besaran uang', 'besaran uang'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control','required']); ?>

                    </div>
                    &nbsp;
                    <div class="col-md-12">
                        <?php echo Form::submit('SAVE', ['class' => 'btn btn-primary form-control']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>