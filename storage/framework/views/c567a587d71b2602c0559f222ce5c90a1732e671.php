    <div class="form-group">
        	<label for="formGroupExampleInput">Please enter author</label>
        	<input type="text" class="form-control" name="Author" id="formGroupExampleInput" placeholder="Your author here..." value="<?php echo e(old('Author') ?? $quote->Author); ?>">
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
        	<label for="formGroupExampleInput">Please enter quote</label>
        	<input type="text" class="form-control" name="Quote" id="formGroupExampleInput" placeholder="Your quote here..." value="<?php echo e(old('Quote') ?? $quote->Quote); ?>">
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
    	    <input type="text" class="form-control" name="Inspired_from" id="formGroupExampleInput" placeholder="inspired_from..." value="<?php echo e(old('Inspired_from') ?? $quote->Inspired_from); ?>">
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
        	<label for="formGroupExampleInput">Please enter tags</label>
        	<input type="text" class="form-control" name="Tag" id="formGroupExampleInput" placeholder="Your tags here..." value="<?php echo e(old('Tag') ?? $quote->Tag); ?>">
          <small>For multiple tags use comma</small>
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
        	<label for="formGroupExampleInput">Please enter quote link</label>
        	<input type="text" class="form-control" name="Link" id="formGroupExampleInput" placeholder="Your link here..." value="<?php echo e(old('Link') ?? $quote->Link); ?>">
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
          <input type="file" class="custom-file-input" id="customFile" name="Image" value="<?php echo e(old('Image') ?? url('storage/img/quotes/'.$quote->Image)); ?>">
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
        </div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/quotes/quote.blade.php ENDPATH**/ ?>