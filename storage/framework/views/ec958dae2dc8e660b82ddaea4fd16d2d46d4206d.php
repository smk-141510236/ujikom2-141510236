<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit Jabatan</h1></div>
                <div class="panel-body">
                     <?php echo Form::model($lembur_pegawai,['method'=>'PATCH','route'=>['lembur_pegawai.update',$lembur_pegawai->id]]); ?>

            
        <div class="col-md-6">
          <label for="kode_lembur_id" >Kode Lembur</label>
          <input id="kode_lembur_id" value="<?php echo e($lembur_pegawai->kode_lembur_id); ?>" type="text" class="form-control" name="kode_lembur_id" autofocus>
             <span class="help-block">
               <strong><?php echo e($errors->first('kode_lembur_id')); ?></strong>
             </span>
        </div>

        <div class="col-md-6">
              <label>Nip & Nama Pegawai</label>
              <select class="col-md-12 form-control" name="pegawai_id">
                            <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawais): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option  value="<?php echo e($pegawais->id); ?>" >
                                <?php echo e($pegawais->nip); ?> <?php echo e($pegawais->User->name); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>  
          <span><?php echo e($errors->first('jabatan_id')); ?></span>
        </div>

        <div class="col-md-6">
          <label for="jumlah_jam" >Jumlah Jam </label>
          <input id="jumlah_jam" value="<?php echo e($lembur_pegawai->jumlah_jam); ?>" type="text" class="form-control" name="jumlah_jam" autofocus>
             <span class="help-block">
               <strong><?php echo e($errors->first('jumlah_jam')); ?></strong>
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
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>