<div class="main-content-inner" id="table">
    <div class="row">       
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Source</th>
                        <th scope="col" colspan="2">Tags</th>
                        <th scope="col">Link</th>
                        <th scope="col" colspan="2">Options</th>
                        <th scope="col">Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    <?php $__empty_1 = true; $__currentLoopData = $shared_videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td scope="row"><?php echo e($count++); ?></td>
                        <td><?php echo e($video->videoSource); ?></td>
                        <td colspan="2"><?php echo e($video->videoTag); ?></td>
                        <td><a href="<?php echo e($video->videoURL); ?>" target="_blank" style="color: #5768ad;">Click here</a></td>
                        <td><a href="#" style="color: #5768ad;">Edit</a></td>
                        <td><a href="#" style="color: #5768ad;">Delete</a></td>
                        <td><?php echo e(Carbon\Carbon::parse($video->created_at)->format('d-M-Y g:h:i:s A')); ?></td>
                    </tr>
                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<h5>No Videos Available</h5>
					<?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/video/shared_videos.blade.php ENDPATH**/ ?>