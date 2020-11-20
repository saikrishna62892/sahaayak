<?php $__currentLoopData = $user->appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mt-4 shadow p-4 mb-5 bg-white rounded" >
                <div class="card-header"></div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                
                                <div><?php echo e($appointment->casehistory->remarks); ?></div>
                            </li>
                        </label>
                
                        </ul>
                    </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/volunteer/casehistory.blade.php ENDPATH**/ ?>