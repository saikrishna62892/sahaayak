<form action="/admin/home" method="POST" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
   	
       <div class="form-group">
    	<label for="formGroupExampleInput">Author</label>
    	<input type="text" class="form-control" name="Author" id="formGroupExampleInput" placeholder="author">
    	<?php $__errorArgs = ['author'];
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
    	<label for="formGroupExampleInput">Quote</label>
    	<input type="text" class="form-control" name="Quote" id="formGroupExampleInput" placeholder="quote">
    	<?php $__errorArgs = ['quote'];
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
	    <label for="formGroupExampleInput">Inspired_from</label>
	    <input type="text" class="form-control" name="Inspired_from" id="formGroupExampleInput" placeholder="inspired_from">
	    <?php $__errorArgs = ['inspired_from'];
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
    	<label for="formGroupExampleInput">Tags</label>
    	<input type="text" class="form-control" name="Tag" id="formGroupExampleInput" placeholder="tags">
    	<?php $__errorArgs = ['tags'];
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
    	<label for="formGroupExampleInput">Link</label>
    	<input type="text" class="form-control" name="Link" id="formGroupExampleInput" placeholder="link">
    	<?php $__errorArgs = ['link'];
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
	    <input type="file" class="custom-file-input" name="Image" id="file-upload">
	    <label class="custom-file-label" for="validatedCustomFile">Choose Image for the Post...</label>
	    <div id="file-upload-filename"></div>
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
	<center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;">Create</button></center>
</form><?php /**PATH C:\sahaayak\resources\views/quotes/create.blade.php ENDPATH**/ ?>