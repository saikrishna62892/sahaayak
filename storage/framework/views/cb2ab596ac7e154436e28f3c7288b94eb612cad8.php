
<div class="container">
<?php $__empty_1 = true; $__currentLoopData = $user_stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	<div class="row">
		<div class="col-lg-12 col-md-6 card" style="background-color: #f5f6fa;">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo e($story->title); ?></h5><br>
		    <h6 class="card-subtitle mb-2 text-muted">Posted date: <?php echo e(Carbon\Carbon::parse($story->created_at)->format('d-M-Y')); ?></h6>
		    <h6 class="card-subtitle mb-2 text-muted">Posted time: <?php echo e(Carbon\Carbon::parse($story->created_at)->format('g:h:i:s A')); ?></h6>
		    <h6 class="card-subtitle mb-2 text-muted">Likes: <?php echo e($story->likes); ?></h6><br>
		    <h6 class="card-subtitle mb-2 text-muted">Content:</h6>
		    <p class="card-text"><?php echo e($story->content); ?></p>
		    <a href="#" class="card-link">See Post</a>
		  </div>
		</div>
	</div>
	<br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<h5>No Stories Available</h5>
<?php endif; ?>
	</div><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/stories/shared_stories.blade.php ENDPATH**/ ?>