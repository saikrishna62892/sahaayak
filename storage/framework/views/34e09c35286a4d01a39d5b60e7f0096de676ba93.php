<div class="container">
<?php $__empty_1 = true; $__currentLoopData = $shared_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	<div class="row">
		<div class="col-lg-12 col-md-6 card" style="background-color: #f5f6fa;">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo e($news->headline); ?></h5><br>
		    <h6 class="card-subtitle mb-2 text-muted">Source: <?php echo e($news->source); ?></h6>
		    <h6 class="card-subtitle mb-2 text-muted">Posted date: <?php echo e(Carbon\Carbon::parse($news->created_at)->format('d-M-Y')); ?></h6>
		    <h6 class="card-subtitle mb-2 text-muted">Posted time: <?php echo e(Carbon\Carbon::parse($news->created_at)->format('g:h:i:s A')); ?></h6><br>
		    <h6 class="card-subtitle mb-2 text-muted">Content:</h6>
		    <p class="card-text"><?php echo e($news->content); ?></p>
		    <a href="<?php echo e($news->newsurl); ?>" class="card-link" target="_blank">Read more</a>
		  </div>
		</div>
	</div>
	<br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<h5>No News Available</h5>
<?php endif; ?>
	</div><?php /**PATH G:\sahayak1\sahaayak\resources\views/news/shared_news.blade.php ENDPATH**/ ?>