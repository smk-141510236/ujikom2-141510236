<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit Tunjangan Pegawai</h1></div>
                <div class="panel-body">
                     <?php echo Form::model($tunjangan_pegawai,['method'=>'PATCH','route'=>['tunjangan_pegawai.update',$tunjangan_pegawai->id]]); ?>


							<div class="form-group">
                        <?php echo Form::label('Kode Tunjangan', 'Kode Tunjangan:'); ?>

                        <select class="form-control" name="kode_tunjangan">
                        <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datatunjangan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value='<?php echo $datatunjangan->id; ?>'><?php echo $datatunjangan->kode_tunjangan; ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
                    </div>

                     <div class="form-group">
                        <?php echo Form::label('Pegawai', 'Pegaawai:'); ?>

                        <select class="form-control" name="pegawai_id">
                        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datapegawai): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value='<?php echo $datapegawai->id; ?>'><?php echo $datapegawai->User->name; ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
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