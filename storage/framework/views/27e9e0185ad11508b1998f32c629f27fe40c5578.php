<div>
    <a style="float:right;background-color: #5768ad;" href="/admin/getOverallReport" target="_blank" class="btn btn-primary">Download Overall Report</a>
</div>
<div class="container">
    <h4 align="center"> Get Monthly Reports Form</h4>
    <div class="card-body">
       <form action="/admin/getMonthlyReport" method="post" target="_blank">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="form-group  col-lg-5">
                <label for="year">Enter Year</label>
                <input type="text" class="form-control" name="year" id="year" aria-describedby="yearHelp" value="" autocomplete="off">
                <?php $__errorArgs = ['year'];
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
            <div class="form-group  col-lg-5">
                <label for="month">Enter Month</label>
                <select  name="month" class="form-control" aria-describedby="slotHelp" required>
                        <option value="" selected disabled hidden>Choose Your Month</option>
                        <option value="1">January</option>
                        <option value="2">Febuary</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                <?php $__errorArgs = ['month'];
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
        <center><button target="_blank" type="submit" class="btn btn-primary" style="background-color: #5768ad;">Submit</button></center>
       </form>
    </div>
</div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/admin/reportForm.blade.php ENDPATH**/ ?>