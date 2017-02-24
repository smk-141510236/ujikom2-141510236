<?php $__env->startSection('content'); ?>


  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Penggajian</div>
                <div class="panel-body">
                    <center><h2>Input Penggajian</h2></center>
                    <br />
              <?php echo Form::open(['url' => 'penggajian', 'class' => 'form-horizontal form-label-left']); ?>

    <div class="form-group">
        <div class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo Form::label('Pegawai', 'Pegawai '); ?>

        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="kode_tunjangan_id">
            
            <?php $__currentLoopData = $gaji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->pegawaiModel->nip); ?>&nbsp;|&nbsp;<?php echo e($data->pegawaiModel->User->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo Form::label('Status Pengambilan', 'Status Pengambialn '); ?>

        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
             <select name="status_pengambilan" class="form-control">
                                    <option value="0">Belum Diambil</option>
                                    <option value="1">Sudah Diambil</option>
            </select>
        </div>
    </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
      <span class="help-block">
            <?php echo e($errors->first('kode_tunjangan_id')); ?>

          </span>
                                       <div>
                                           <?php if(isset($error)): ?>
                                               Check Lagi Gaji Sudah Ada
                                           <?php endif; ?>
                                       </div>
                               </div>
       <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

          </div>
      </div>
    </div>
    <?php echo Form::close(); ?>

          </div>
          </div>     
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>