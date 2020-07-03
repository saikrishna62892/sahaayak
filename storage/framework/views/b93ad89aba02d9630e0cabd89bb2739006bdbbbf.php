<div class="container">
	<div class="row">
<?php $__empty_1 = true; $__currentLoopData = $shared_videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		<div class="col-lg-12 col-md-6 card" style="background-color: #f5f6fa;">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo e($video->videoSource); ?></h5><br>
		    <h6 class="card-subtitle mb-2 text-muted">Tags: <?php echo e($video->videoTag); ?></h6>
		    <h6 class="card-subtitle mb-2 text-muted">Posted date: <?php echo e(Carbon\Carbon::parse($video->created_at)->format('d-M-Y')); ?></h6>
		    <h6 class="card-subtitle mb-2 text-muted">Posted time: <?php echo e(Carbon\Carbon::parse($video->created_at)->format('g:h:i:s A')); ?></h6><br>
		    <h6 class="card-subtitle mb-2 text-muted">URL: <a href="<?php echo e($video->videoURL); ?>" target="_blank"><?php echo e($video->videoURL); ?></a></h6>
		  </div>
		</div>
	<br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<h5>No Videos Available</h5>
<?php endif; ?>
</div>
</div><?php /**PATH G:\sahayak1\sahaayak\resources\views/video/shared_videos.blade.php ENDPATH**/ ?>