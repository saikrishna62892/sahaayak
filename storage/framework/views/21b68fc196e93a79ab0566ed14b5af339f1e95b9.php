<div class="card">
  <div class="card-body">
    <form action="<?php echo e(route('dialyQuote')); ?>" method="POST" enctype="multipart/form-data">
    	<?php echo csrf_field(); ?>
      <div class="form-group">
        <label for="formGroupExampleInput">Enter Dialy Quote</label>
        <input type="text" class="form-control" name="quote" id="formGroupExampleInput" required placeholder="Your dialy quote here...">
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
      &emsp;
          <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;" >Post Quote</button></center>
    </form>
  </div>
</div><?php /**PATH D:\Sahaayak\sahaayak\resources\views/quotes/dialyquote.blade.php ENDPATH**/ ?>