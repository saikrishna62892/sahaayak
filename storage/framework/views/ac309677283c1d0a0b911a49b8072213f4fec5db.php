        <div class="form-group">
            <label for="videoSource">Please enter video source</label>
            <input type="text" class="form-control" name="videoSource" id="videoSource" aria-describedby="videoSourceHelp" placeholder="Your video source here..." value="<?php echo e(old('videoSource') ?? $video->videoSource); ?>">
            <?php $__errorArgs = ['videoSource'];
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
            <label for="videoTag">Please enter video tags</label>
            <input type="text" class="form-control" name="videoTag" id="videoTag" aria-describedby="videoTagHelp" placeholder="Your video tags here..." value="<?php echo e(old('videoTag') ?? $video->videoTag); ?>">
            <?php $__errorArgs = ['videoTag'];
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
            <label for="videoURL">Please enter video URL</label>
            <input type="text" class="form-control" name="videoURL" id="videoURL" aria-describedby="videoURLHelp" placeholder="Your video URL here..." value="<?php echo e(old('videoURL') ?? $video->videoURL); ?>">
            <?php $__errorArgs = ['videoURL'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div><?php /**PATH C:\sahaayak\resources\views/video/video.blade.php ENDPATH**/ ?>