                            <div class="card">
                <div class="card-header">Fill Report Details</div>

                <div class="card-body">
                   <form action="/volunteer/report/generateReport" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="appointment_id">appointment_id</label>
                        <input type="number" class="form-control" name="appointment_id" id="appointment_id" aria-describedby="appointment_idHelp" placeholder="Enter appointment_id" value="" readonly>
                        <small id="appointment_idHelp" class="form-text text-muted">appointment_id</small>
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
                    <div class="form-group">
                        <label for="speed">Speed of talk</label>
                        <input type="number" class="form-control" name="speed" id="speed" aria-describedby="speedHelp" placeholder="enter speed of talk" value="<?php echo e(old('speed')); ?>">
                        <small id="speedHelp" class="form-text text-muted">enter speed of talk</small>
                        <?php $__errorArgs = ['speed'];
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
                    <div class="form-group">
                        <label for="longPause">long Pause</label>
                        <input type="number" class="form-control" name="longPause" id="longPause" aria-describedby="longPauseHelp" placeholder="Enter long Pause" value="<?php echo e(old('longPause')); ?>">
                        <small id="longPauseHelp" class="form-text text-muted">enter long Pause</small>
                        <?php $__errorArgs = ['longPause'];
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

                    <div class="form-group">
                        <label for="loudness">loudness</label>
                        <input type="number" class="form-control" name="loudness" id="loudness" aria-describedby="loudnessHelp" placeholder="Enter loudness" value="<?php echo e(old('loudness')); ?>">
                        <small id="loudnessHelp" class="form-text text-muted">enter loudness</small>
                        <?php $__errorArgs = ['loudness'];
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

                    <div class="form-group">
                        <label for="keywords">keywords</label>
                        <input type="text" class="form-control" name="keywords" id="keywords" aria-describedby="keywordsHelp" placeholder="Enter keywords" value="<?php echo e(old('keywords')); ?>">
                        <small id="keywordsHelp" class="form-text text-muted">enter purpose</small>
                        <?php $__errorArgs = ['keywords'];
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

                    <div class="form-group">
                        <label for="suggestions">suggestions</label>
                        <textarea class="form-control" name="suggestions" id="suggestions" aria-describedby="suggestionsHelp" placeholder="Enter suggestions" value="<?php echo e(old('suggestions')); ?>"></textarea>
                        <small id="suggestionsHelp" class="form-text text-muted">enter suggestions</small>
                        <?php $__errorArgs = ['suggestions'];
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

                    <div class="form-group">
                        <label for="remarks">remarks</label>
                        <textarea type="textarea" class="form-control" name="remarks" id="remarks" aria-describedby="remarksHelp" placeholder="Enter remarks" value="<?php echo e(old('remarks')); ?>"></textarea>
                        <small id="remarksHelp" class="form-text text-muted">enter remarks</small>
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
                        <button  type="submit" class="btn btn-primary">generate report</button>
                   </form>
                </div>
            </div><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/appointment/reportForm.blade.php ENDPATH**/ ?>