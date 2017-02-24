<?php $__env->startSection('content'); ?>

        <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><center>Udpate Kategori Lembur</center></h3> </div>
                    <div class="panel-body">

                <?php echo Form::model($kategori_lembur,['method'=>'PATCH','route'=>['kategori_lembur.update',$kategori_lembur->id]]); ?>

                   <div class="form-group">
                        <?php echo Form::label('kode lembur', 'kode lembur'); ?>

                        <?php echo Form::text('kode_lembur',null,['class'=>'form-control']); ?>

                          <?php if($errors->has('kode_lembur')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('kode_lembur')); ?></strong>
                                    </span>
                            <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <?php echo Form::label('Kode Jabatan', 'Kode Jabatan:'); ?>

                        <select class="form-control" name="jabatan_id">
                        <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value='<?php echo $jabatans->id; ?>'><?php echo $jabatans->nama_jabatan; ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
                    </div>

                     <div class="form-group">
                        <?php echo Form::label('Golongan', 'Golongan:'); ?>

                        <select class="form-control" name="golongan_id">
                        <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value='<?php echo $golongans->id; ?>'><?php echo $golongans->nama_golongan; ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                         <?php echo Form::label('Besaran Uang', 'Besaran Uang:'); ?>

                            <?php echo Form::text('besaran_uang',null,['class'=>'form-control', 'required']); ?>

                                     <?php if($errors->has('besaran_uang')): ?>
                                                <span class="help-block">
                                                <strong><?php echo e($errors->first('besaran_uang')); ?></strong>
                                                </span>
                                     <?php endif; ?>
                    </div>

                    <div class="form-group">
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