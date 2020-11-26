<div class="main-content-inner" id="table">
    <div class="row">       
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Posted_In</th>
                        <th scope="col">Posted_By</th>
                        <th scope="col">College ID</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Options</th>
                        <th scope="col">Posted_At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    <?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td scope="row"><?php echo e($count++); ?></td>
                        <td>
                            <?php if($comment->learn_id == 1): ?>
                            Depression
                            <?php elseif($comment->learn_id == 2): ?>
                            Suicide
                            <?php elseif($comment->learn_id == 3): ?>
                            Stress
                            <?php elseif($comment->learn_id == 4): ?>
                            Stigma
                            <?php elseif($comment->learn_id == 5): ?>
                            Healthy Sleep
                            <?php elseif($comment->learn_id == 6): ?>
                            Mental Illness
                            <?php elseif($comment->learn_id == 7): ?>
                            Hopelessness
                            <?php elseif($comment->learn_id == 8): ?>
                            Fear of Loss
                            <?php elseif($comment->learn_id == 9): ?>
                            Social Isolation
                            <?php else: ?>
                            Other Content
                            <?php endif; ?>
                        </td>
                        <?php $user_details = App\User::find($comment->user_id); ?>
                        <td><?php echo e($user_details->name); ?></td>
                        <td><?php echo e($user_details->rollnum); ?></td>
                        <td><?php echo e($comment->comment); ?></td>
                        <td><a href="deleteComment/<?php echo e($comment->id); ?>/commentdeleted" style="color: #5768ad;">Delete</a></td>
                        <td><?php echo e(Carbon\Carbon::parse($comment->created_at)->format('d-M-Y')); ?></td>
                    </tr>
                  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<h5>No Comments Available</h5>
					<?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php /**PATH D:\Sahaayak\sahaayak\resources\views/admin/show_comments.blade.php ENDPATH**/ ?>