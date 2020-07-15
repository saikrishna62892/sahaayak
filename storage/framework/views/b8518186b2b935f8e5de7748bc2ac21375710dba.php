<div class="main-content-inner" id="table">
    <div class="row">       
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col" colspan="3">Quote</th>
                        <th scope="col">Author</th>
                        <th scope="col">Inspired_from</th>
                        <th scope="col">Link</th>
                        <th scope="col" colspan="2">Options</th>
                        <th scope="col">Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    <?php $__empty_1 = true; $__currentLoopData = $shared_quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quotes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td scope="row"><?php echo e($count++); ?></td>
                        <td colspan="3"><?php echo e($quotes->Quote); ?></td>
                        <td><?php echo e($quotes->Author); ?></td>
                        <td><?php echo e($quotes->Inspired_from); ?></td>
                        <td>
                        	<?php $link="https://".$quotes->Link ?>
                        	<a href="<?php echo e($link); ?>" style="color: #5768ad;" target="_blank">Click here</a>
                        </td>
                        <td><a href="/admin/home/editQuote/<?php echo e($quotes->id); ?>/quoteedited" style="color: #5768ad;">Edit</a></td>
                        <td><a href="deleteQuote/<?php echo e($quotes->id); ?>/quotedeleted" style="color: #5768ad;">Delete</a></td>
                        <td><?php echo e(Carbon\Carbon::parse($quotes->created_at)->format('d-M-Y g:h:i:s A')); ?></td>
                    </tr>
                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<h5>No Quotes Available</h5>
					<?php endif; ?>
                </tbody>
            </table>
            <div class="col-lg-12"><span><?php echo e($shared_quotes->links()); ?></span></div>
        </div>
    </div>
</div>
          <?php /**PATH C:\sahaayak\resources\views/quotes/shared_quotes.blade.php ENDPATH**/ ?>