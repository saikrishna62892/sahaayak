<div class="card">
    <div class="card-body">
       <form action="/admin/home/videos" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="videoSource">Source of the Video</label>
            <input type="text" class="form-control" name="videoSource" id="videoSource" aria-describedby="videoSourceHelp" placeholder="Enter Video Source">
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
            <label for="videoTag">Video Tags</label>
            <input type="text" class="form-control" name="videoTag" id="videoTag" aria-describedby="videoTagHelp" placeholder="Enter Video Tags separated by comma">
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
            <label for="videoURL">Video URL</label>
            <input type="text" class="form-control" name="videoURL" id="videoURL" aria-describedby="videoURLHelp" placeholder="Enter Video URL">
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
        </div>
        <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Add Video</button></center>
       </form>
    </div>
</div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/video/create.blade.php ENDPATH**/ ?>