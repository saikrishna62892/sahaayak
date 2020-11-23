<div class="form-group">
	<label for="formGroupExampleInput">Please enter Caption of the Image</label>
	<input type="text" class="form-control" name="caption" id="formGroupExampleInput" placeholder="Your caption here..." autocomplete="off" >
	<?php $__errorArgs = ['caption'];
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
    <label for="exampleFormControlTextarea1">Please enter Description of the Image</label>
    <textarea class="form-control" name="paragraph" id="exampleFormControlTextarea1" rows="2" placeholder="Your content here..." autocomplete="off" ></textarea>
    <?php $__errorArgs = ['paragraph'];
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
<div class="custom-file">
		<input type="file" class="custom-file-input" id="customFile" name="image" autocomplete="off" >
		<label class="custom-file-label" for="customFile">Please choose image...</label>
    <?php $__errorArgs = ['image'];
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
<?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/gallery/gallery.blade.php ENDPATH**/ ?>