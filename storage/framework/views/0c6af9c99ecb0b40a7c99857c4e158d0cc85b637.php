<div class="container">
	<div class="row">
		<?php $__empty_1 = true; $__currentLoopData = $suggestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suggestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<div class="card col-lg-12 col-md-12 shadow p-4 mb-5 bg-white rounded">
				  <div class="card-body">
				    <h6 class="card-subtitle mb-2 text-muted">Name: <?php echo e($suggestion->name); ?></h6>
				    <h6 class="card-subtitle mb-2 text-muted">Email: <?php echo e($suggestion->email); ?></h6><br>
				    <h6 class="card-subtitle mb-2 text-muted">Details: <?php echo e(Carbon\Carbon::parse($suggestion->timestamp)->format('d-M-Y')); ?></h6><br>
				    <h6 class="card-subtitle mb-2 text-muted">Comment:</h6>
				    <p class="card-text" align="justify"><?php echo e($suggestion->comment); ?></p>
				  </div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<h5>No Suggestions Available</h5>
		<?php endif; ?>
	</div>
</div><?php /**PATH C:\sahaayak\resources\views/suggestions.blade.php ENDPATH**/ ?>