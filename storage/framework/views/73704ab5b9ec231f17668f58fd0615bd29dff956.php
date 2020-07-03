<div class="container">
<?php $__empty_1 = true; $__currentLoopData = $shared_playlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $playlists): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	<div class="row">
		<div class="col-lg-12 col-md-6 card" style="background-color: #f5f6fa;">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo e($playlists->playlistSource); ?></h5><br>
		    <h6 class="card-subtitle mb-2 text-muted">Tags: <?php echo e($playlists->playlistTag); ?></h6>
		    
			<p> URL: <?php $link="https://$playlists->playlistURL" ?>
                            <p><a href="<?php echo e($link); ?>" style="color:#5768ad;" target="_blank">Click Here</a></p></p>
		  </div>
		</div>
	</div>
	<br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<h5>No Playlists Available</h5>
<?php endif; ?>
	</div><?php /**PATH C:\sahaayak\resources\views/playlists/shared_playlists.blade.php ENDPATH**/ ?>