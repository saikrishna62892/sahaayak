<div class="main-content-inner" id="table">
    <div class="row">       
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Caption</th>
                        <th scope="col">Description</th>
                        <th scope="col">Options</th>
                        <th scope="col">Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    <?php $__empty_1 = true; $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td scope="row"><?php echo e($count++); ?></td>
                        <td><?php echo e($gal->caption); ?></td>
                        <td><?php echo e($gal->paragraph); ?></td>
                        <td>
                            <?php if(is_null($gal->image)): ?>
                                <center><img class="d-block" src="<?php echo e(asset('/img/galleries/default.jpg')); ?>" alt="Gallery-Image" height="50" width="75"></center>
                            <?php else: ?>
                                <center><img class="d-block" src="<?php echo e(asset('/img/galleries/'.$gal->image)); ?>" alt="Gallery-Image" height="50" width="75"></center>
                            <?php endif; ?>
                        </td>
                        <td><a href="deleteGallery/<?php echo e($gal->id); ?>/gallerydeleted" style="color: #5768ad;">Delete</a></td>
                        <td><?php echo e(Carbon\Carbon::parse($gal->created_at)->format('d-M-Y')); ?></td>
                    </tr>
                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<h5>No Gallery Available</h5>
					<?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/gallery/shared_gallery.blade.php ENDPATH**/ ?>