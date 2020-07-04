<div class="card">
  <div class="card-body">
    <form action="/admin/home" method="POST" enctype="multipart/form-data">
    	<?php echo csrf_field(); ?>
       	
           <div class="form-group">
        	<label for="formGroupExampleInput">Please enter author</label>
        	<input type="text" class="form-control" name="Author" id="formGroupExampleInput" placeholder="Your author here...">
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
        	<input type="text" class="form-control" name="Quote" id="formGroupExampleInput" placeholder="Your quote here...">
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
    	    <input type="text" class="form-control" name="Inspired_from" id="formGroupExampleInput" placeholder="inspired_from...">
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
        	<input type="text" class="form-control" name="Tag" id="formGroupExampleInput" placeholder="Your tags here...">
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
        	<input type="text" class="form-control" name="Link" id="formGroupExampleInput" placeholder="Your link here...">
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
          <input type="file" class="custom-file-input" id="customFile" name="Image">
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
        &emsp;
          <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;">Post Quote</button></center>
    </form>
  </div>
</div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/quotes/create.blade.php ENDPATH**/ ?>