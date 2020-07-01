
<?php $__currentLoopData = $user_stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="row">
		<div class="card" style="width: 24rem;background-color: #f5f6fa;">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo e($story->title); ?></h5>
		    <h6 class="card-subtitle mb-2 text-muted">Posted on: <?php echo e($story->created_at); ?>&emsp;&emsp;Likes: <?php echo e($story->likes); ?></h6>
		    <p class="card-text"><?php echo e($story->content); ?></p>
		    <a href="#" class="card-link">Card link</a>
		    <a href="#" class="card-link">Another link</a>
		  </div>
		</div>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/stories/shared_stories.blade.php ENDPATH**/ ?>