<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit Tunjangan Pegawai</h1></div>
                <div class="panel-body">
                     <?php echo Form::model($tunjangan_pegawai,['method'=>'PATCH','route'=>['tunjangan_pegawai.update',$tunjangan_pegawai->id]]); ?>


							<div class="col-md-6">
                                <label for="Tunjangan">Kode Tunjangan</label>
                                    <select class="col-md-8 form-control" name="kode_tunjangan">
                                    <option>Pilih Tunjangan Baru</option>
                                        <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datatunjangan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <option  value="<?php echo e($datatunjangan->id); ?>" ><?php echo e($datatunjangan->kode_tunjangan); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </select>
                                    <span class="help-block">
                                        <?php echo e($errors->first('kode_tunjangan')); ?>

                                    </span>
                            </div>

							<div class="col-md-6">
                                <label for="Pegawai">Pegawai ID</label>
                                    <select class="col-md-8 form-control" name="User">
                                    <option>Pilih ID Baru</option>
                                        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datapegawai): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <option  value="<?php echo e($datapegawai->id); ?>" ><?php echo e($datapegawai->User->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </select>
                                    <span class="help-block">
                                        <?php echo e($errors->first('User->name')); ?>

                                    </span>
                            </div>
					<div class="col-md-12"></div>
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
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>