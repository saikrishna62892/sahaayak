<div class="container">
<?php $__empty_1 = true; $__currentLoopData = $shared_quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quotes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	<div class="row">
		<div class="col-lg-12 col-md-6 card" style="background-color: #f5f6fa;">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo e($quotes->Inspired_from); ?></h5><br>
		    <h6 class="card-subtitle mb-2 text-muted">Author: <?php echo e($quotes->Author); ?></h6>
		    <h6 class="card-subtitle mb-2 text-muted">Quote:</h6>
		    <p class="card-text"><?php echo e($quotes->Quote); ?></p>
		    <a href="<?php echo e($quotes->Link); ?>" class="card-link" target="_blank">Read more</a>
		  </div>
		</div>
	</div>
	<br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<h5>No Quotes Available</h5>
<?php endif; ?>
	</div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/quotes/shared_quotes.blade.php ENDPATH**/ ?>