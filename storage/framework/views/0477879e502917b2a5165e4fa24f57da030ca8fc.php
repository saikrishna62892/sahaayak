


<?php $__env->startSection('name'); ?>
    Edit details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow p-4 mb-5 bg-white rounded">

    <h4 align="center">Mail To <?php echo e($appointment->faculty_advisor); ?></h4>
    <div class="card-body">
       <form action="/counsellor/mailToFA" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
            <div class="row">
                <div class="form-group  col-lg-12" style="display: none;">
                    <input type="text" class="form-control" name="appointment_id" id="appointment_id" aria-describedby="appoinment_idHelp" value="<?php echo e($appointment->id); ?>" placeholder="Your FA Email here...">
                    <?php $__errorArgs = ['appointment_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group  col-lg-12">
                    <label for="fa_email">Enter <?php echo e($appointment->faculty_advisor); ?> Email</label>
                    <input type="text" class="form-control" name="fa_email" id="fa_email" aria-describedby="fa_emailHelp" value="" placeholder="<?php echo e($appointment->faculty_advisor); ?> Email here..." required>
                    <?php $__errorArgs = ['fa_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group  col-lg-12">
                    <label for="subject">Please Enter Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" aria-describedby="subjectHelp" placeholder="Your Subject here..." required>
                    <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group col-lg-12">
                    <label for="description">Please enter description about <?php echo e($appointment->name); ?></label>
                    <textarea type="textarea" class="form-control" name="description" id="description" placeholder="Your description here..." rows="5" required></textarea>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="custom-file form-group col-lg-12">
                    <input type="file" class="custom-file-input" id="customFile" name="attachment" >
                    <label class="custom-file-label" for="customFile">Please Enter Attachment(Optional)</label>
                    <?php $__errorArgs = ['attachment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <br>
            <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Mail to FA</button></center>
       </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/counsellors/mailtofacultyadvisor.blade.php ENDPATH**/ ?>