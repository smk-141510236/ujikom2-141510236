<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit Tunjangan</h1></div>
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
                        <div class="form-group">
                        <?php echo Form::label('Jabatan', 'Jabatan:'); ?>

                        <select class="form-control" name="jabatan_id">
                        <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datajabatan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value='<?php echo $datajabatan->id; ?>'><?php echo $datajabatan->nama_jabatan; ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            <span class="help-block">
                                        <strong><?php echo e($errors->first('kode_jabatan')); ?></strong>
                                    </span>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-6">
                     <div class="form-group">
                        <?php echo Form::label('Golongan', 'Golongan:'); ?>

                        <select class="form-control" name="golongan_id">
                        <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datagolongan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value='<?php echo $datagolongan->id; ?>'><?php echo $datagolongan->nama_golongan; ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            <span class="help-block">
                                        <strong><?php echo e($errors->first('kode_golongan')); ?></strong>
                                    </span>
                        </select>
                    </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="status">status</label>
                        <select class="form-control" class="col-md-8" form="form-control" name="status">
                        <option value="menikah">Menikah</option>
                        <option value="belum_menikah">Belum Menikah</option>
                        <option value="janda">Janda</option>
                        <option value="duda">Duda</option>
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