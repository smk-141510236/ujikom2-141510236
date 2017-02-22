<?php $__env->startSection('content'); ?>

<div class="col-md-offset-3">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Create Tunjangan Pegawai</div>
                    
                <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/tunjangan_pegawai')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="col-md-6">
                                <label for="kode_tunjangan_id">Kode Tunjangan</label>
                                    <select class="col-md-6 form-control" name="kode_tunjangan_id">
                                        <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datatunjangan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <option  value="<?php echo e($datatunjangan->id); ?>" ><?php echo e($datatunjangan->kode_tunjangan); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </select>
                                    <span><?php echo e($errors->first('kode_tunjangan)')); ?></span>
                            </div>
                            +
                        <div class="col-md-12">
                                <label>Nama Pegawai</label>
                                <select name="pegawai_id" class="form-control" name="pegawai_id">
                                <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datapegawai): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($datapegawai->id); ?>">
                                        <?php echo e($datapegawai->User->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('pegawai_id')); ?></strong>
                                    </span>
                            </div>

                           <div class="col-md-12">
                            <button type="submit" class="btn btn-primary form-control">Tambah</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>