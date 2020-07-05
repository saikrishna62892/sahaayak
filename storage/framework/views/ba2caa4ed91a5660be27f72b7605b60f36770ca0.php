<div class="container">
	<div class="row">
		<?php $__empty_1 = true; $__currentLoopData = $shared_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<div class="card col-lg-12 col-md-12 shadow p-4 mb-5 bg-white rounded" style="background-color: #f5f6fa;">
				  <div class="card-body">
				  	<div align="right"><a href="#" style="color: #5768ad;">Edit</a>&emsp;
                    <a href="#" style="color: #5768ad;">Delete</a></div>
				    <h5 class="card-title" align="justify"><?php echo e($news->headline); ?></h5><br>
				    <h6 class="card-subtitle mb-2 text-muted">Source: <?php echo e($news->source); ?></h6><br>
				    <h6 class="card-subtitle mb-2 text-muted">Details: <?php echo e(Carbon\Carbon::parse($news->created_at)->format('d-M-Y g:h:i:s A')); ?></h6><br>
				    <h6 class="card-subtitle mb-2 text-muted">Content:</h6>
				    <p class="card-text" align="justify"><?php echo e($news->content); ?></p>
				    <?php $link="https://".$news->newsurl ?>
				    <a href="<?php echo e($link); ?>" target="_blank" style="color: #5768ad;">Read more</a>
				  </div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<h5>No News Available</h5>
		<?php endif; ?>
	</div>
</div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/news/shared_news.blade.php ENDPATH**/ ?>