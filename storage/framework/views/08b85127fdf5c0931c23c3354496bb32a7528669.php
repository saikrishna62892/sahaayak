<div class="container">
	<div class="row">
	<?php $__empty_1 = true; $__currentLoopData = $talks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $talk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<div class="card col-lg-12 col-md-12 shadow p-4 mb-5 bg-white rounded" style="background-color: #f5f6fa;">
			  	<div class="card-body">
			  		<div align="right"><a href="/admin/home/editTalk/<?php echo e($talk->id); ?>/talkedited" style="color: #5768ad;">Edit</a>&emsp;
                    <a href="deleteTalk/<?php echo e($talk->id); ?>/talkdeleted" style="color: #5768ad;">Delete</a></div>
				    <h5 class="card-title"><?php echo e($talk->title); ?></h5><br>

				    <h6 class="card-subtitle mb-2 text-muted">Details: <?php echo e(Carbon\Carbon::parse($talk->created_at)->format('d-M-Y g:h:i:s A')); ?></h6><br>
				    <h6 class="card-subtitle mb-2 text-muted">Likes: <?php echo e($talk->likes); ?></h6><br>
				    <h6 class="card-subtitle mb-2 text-muted">Content:</h6>
				    <p class="card-text" align="justify"><?php echo e($talk->content); ?></p>
				    <a href="/displayTalks" style="color: #5768ad;">See Post</a>
			  </div>
			</div>
		<br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
		<h5>No Talks Available</h5>
	<?php endif; ?>
	</div>
</div><?php /**PATH G:\sahayak1\sahaayak\resources\views/talks/shared_talks.blade.php ENDPATH**/ ?>