<div class="main-content-inner" id="table">
    <div class="row">       
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Source</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Link</th>
                        <th scope="col" colspan="2">Options</th>
                        <th scope="col">Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    <?php $__empty_1 = true; $__currentLoopData = $shared_playlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $playlists): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td scope="row"><?php echo e($count++); ?></td>
                        <td><?php echo e($playlists->playlistSource); ?></td>
                        <td><?php echo e($playlists->playlistTag); ?></td>
                        <td>
                        	<?php $link="https://".$playlists->playlistURL ?>
                            <a href="<?php echo e($link); ?>" style="color:#5768ad;" target="_blank">Click here</a>
                        </td>
                        <td><a href="/admin/home/editPlaylist/<?php echo e($playlists->id); ?>/playlistedited" style="color: #5768ad;">Edit</a></td>
                        <td><a href="deletePlaylists/<?php echo e($playlists->id); ?>/playlistdeleted" style="color: #5768ad;">Delete</a></td>
                        <td><?php echo e(Carbon\Carbon::parse($playlists->created_at)->format('d-M-Y g:h:i:s A')); ?></td>
                    </tr>
                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<h5>No Playlistss Available</h5>
					<?php endif; ?>
                </tbody>
            </table>
            <div class="col-lg-12"><span><?php echo e($shared_playlists->links()); ?></span></div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/playlists/shared_playlists.blade.php ENDPATH**/ ?>