<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Penggajian</div>
                <div class="panel-body">

                <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/penggajian')); ?>">
                        <?php echo e(csrf_field()); ?>


                    <label for="status_pengambilan">Status Pengambilan</label>
                    <div class="form-group<?php echo e($errors->has('status_pengambilan') ? 'has-error' : ''); ?>">
                                
                                <div class="col-md-6">
                                	<select name="status_pengambilan" class="form-control">
                                		<option value="0">Belum Diambil</option>
                                		<option value="1">Sudah Diambil</option>
                                	</select>
                                <?php if($errors->has('status_pengambilan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('status_pengambilan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                    </div>
                    <label for="kode_tunjangan_id">Pegawai</label>
                    <div class="form-group<?php echo e($errors->has('kode_tunjangan_id') ? 'has-error' : ''); ?>">

                        <div class="col-md-8">
                            <select name="kode_tunjangan_id" class="form-control">
                                <option value="">Pilih</option>
                                <?php $__currentLoopData = $tunjangan_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->pegawaiModel->User->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                            <?php if($errors->has('kode_tunjangan_id')): ?>
                                <span class="help-block">
                                  <strong><?php echo e($errors->first('kode_tunjangan_id')); ?></strong>  
                                </span>
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php if(isset($error)): ?>
                            Penggajian Ada
                            <?php endif; ?>
                        </div>
                        
                            <div class="col-md-12" >
                                <button type="submit" class="btn btn-primary form-control">Hitung Gaji</button>
                            </div>
                                        </div>
                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>