<div class="form-group">
		    	<label for="formGroupExampleInput">Please enter title</label>
		    	<input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Your title here..." value="<?php echo e(old('title') ?? $talk->title); ?>">
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
			    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10" placeholder="Your content here..." value="<?php echo e(old('content') ?? $talk->content); ?>"></textarea>
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
			    <select class="custom-select" name="category" required  value="<?php echo e(old('category') ?? $talk->category); ?>">
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
  				<input type="file" class="custom-file-input" id="customFile" name="image" value="<?php echo e(old('image') ?? url('storage/img/talks/'.$talk->image)); ?>">
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
			</div><?php /**PATH G:\sahayak1\sahaayak\resources\views/talks/talk.blade.php ENDPATH**/ ?>