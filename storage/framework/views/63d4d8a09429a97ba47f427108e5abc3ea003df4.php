<div class="card shadow p-4 mb-5 bg-white rounded">

    <h4 align="center" id="demo"> </h4>
    <div class="card-body">
       <form action="/counsellor/addCasehistory" method="post">
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
                <label for="appointment_name">Name</label>
                <input type="text" class="form-control" name="appointment_name" id="appointment_name" aria-describedby="appointment_nameHelp" value="" autocomplete="off" readonly>
                <?php $__errorArgs = ['appointment_name'];
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
                <label for="appointment_email">Email</label>
                <input type="text" class="form-control" name="appointment_email" id="appointment_email" aria-describedby="appointment_emailHelp" value="" autocomplete="off" readonly>
                <?php $__errorArgs = ['appointment_email'];
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
            <label for="remarks">Enter Remarks/Findings </label>
            <textarea type="textarea" class="form-control" name="remarks" id="remarks" placeholder="Your remarks about the session" rows="5" required></textarea>
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
            <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Submit</button></center>
       </form>
    </div>
</div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/appointment/reportForm.blade.php ENDPATH**/ ?>