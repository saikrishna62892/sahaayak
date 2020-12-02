<div class="container">
	<form action="<?php echo e(route('addStoryFields')); ?>" method="POST" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
	   	<div class="form-group">
	    	<label for="formGroupExampleInput">Please enter title of the story</label>
	    	<input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Your title here..." required autocomplete="off" >
	    	<?php $__errorArgs = ['title'];
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
		    <label for="exampleFormControlTextarea1">Please enter content</label>
		    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10" placeholder="Your content here..." required autocomplete="off" ></textarea>
		    <?php $__errorArgs = ['content'];
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
		    <select class="custom-select" name="category" required>
		      	<option value="">Please select category...</option>
		      	<option value="Depression">Depression</option>
		      	<option value="Suicide">Suicide</option>
		      	<option value="Stress">Stress</option>
		      	<option value="Stigma">Stigma</option>
		      	<option value="Healthy Sleep">Healthy Sleep</option>
		      	<option value="Mental Illness">Mental Illness</option>
		     	<option value="Hopelessness">Hopelessness</option>
		     	<option value="Fear of Loss">Fear of Loss</option>
		     	<option value="Social Isolation">Social Isolation</option>
		    </select>
		    <?php $__errorArgs = ['category'];
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
		    <input type="file" class="custom-file-input" name="image" id="file-upload" required autocomplete="off">
		    <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>
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
		&emsp;
		<center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;" >Submit</button></center>
	</form>
</div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/stories/create.blade.php ENDPATH**/ ?>