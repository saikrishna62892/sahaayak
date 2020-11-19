<div class="main-content-inner" id="table">
    <div class="row">       
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">College ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Profession</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    <?php $__empty_1 = true; $__currentLoopData = $counsellors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $counsellor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td scope="row"><?php echo e($count++); ?></td>
                        <td><?php echo e($counsellor->name); ?></td>
                        <td><?php echo e($counsellor->college_id); ?></td>
                        <td><a href="mailto:<?php echo e($counsellor->email); ?>" target="_blank" style="color: #5768ad;"><?php echo e($counsellor->email); ?></a></td>
                        <td><?php echo e($counsellor->profession); ?></td>
                        <td><a href="/admin/home/counsellor/<?php echo e($counsellor->id); ?>/getDetails" style="color: #5768ad;">See Full Details</a>&emsp;
                        	<a href="/admin/home/counsellor/<?php echo e($counsellor->id); ?>/getDetails" style="color: #5768ad;">Remove</a>
                        </td>
                    </tr>
                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<h5>No Counsellors Available</h5>
					<?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/counsellors/counsellor_accepted.blade.php ENDPATH**/ ?>