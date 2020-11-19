<div class="card shadow p-4 mb-5 bg-white rounded">
    <h4 align="center" id="demo">Add Case history for </h4>
    <div class="card-body">
       <form action="/volunteer/report/generateReport" method="post">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="form-group  col-lg-2">
                <label for="appointment_id">Appointment ID</label>
                <input type="text" class="form-control" name="appointment_id" id="appointment_id" aria-describedby="appointment_idHelp" value="" autocomplete="off" readonly>
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
            <div class="form-group  col-lg-4">
                <label for="appointment_id">Name</label>
                <input type="text" class="form-control" name="appointment_name" id="appointment_name" aria-describedby="appointment_nameHelp" value="" autocomplete="off" readonly>
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
            <div class="form-group  col-lg-6">
                <label for="appointment_id">Email</label>
                <input type="text" class="form-control" name="appointment_email" id="appointment_email" aria-describedby="appointment_emailHelp" value="" autocomplete="off" readonly>
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
        </div>
        



        <div class="form-group">
            <label for="remarks">Enter remarks</label>
            <textarea type="textarea" class="form-control" name="remarks" id="remarks" placeholder="Your remarks about the session" rows="5"></textarea>
            <small>Note: Enter Your Remarks about the session separated by newline</small>
            <?php $__errorArgs = ['remarks'];
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
            <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Generate Report</button></center>
       </form>
    </div>
</div><?php /**PATH G:\sahayak1\sahaayak\resources\views/appointment/reportForm.blade.php ENDPATH**/ ?>