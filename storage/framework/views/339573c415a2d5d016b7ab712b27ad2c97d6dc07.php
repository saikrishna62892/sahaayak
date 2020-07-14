
<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <h4 align="center">Available Questions in <a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/create" style="color: #5768ad;"><?php echo e($questionnaire->questionnaireTitle); ?></a></h4>
            <div class="card-body">
                <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

                </div>
                <?php endif; ?>

                <div class="main-content-inner" id="table">
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Question</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">created_at</th>
                                        <th scope="col">modified_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1 ?>
                                    <?php $__empty_1 = true; $__currentLoopData = $questionnaire->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td scope="row"><?php echo e($count++); ?></td>
                                        <td><?php echo e($question->question); ?></td>
                                        <td>
                                            <a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/<?php echo e($question->id); ?>/edit"  style="color: #5768ad;">Edit </a>
                                        </td>
                                        <td>
                                            <form action="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/<?php echo e($question->id); ?>" method="post">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button style="color: #5768ad;background:none!important;border:none;">Delete</button>
                                            </form>
                                        </td>
                                        <td><?php echo e(Carbon\Carbon::parse($question->created_at)->format('d-M-Y g:h:i:s A')); ?></td>
                                        <td><?php echo e(Carbon\Carbon::parse($question->updated_at)->format('d-M-Y g:h:i:s A')); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <h5>No Questions available..</h5>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div>
                    <center><a href="/admin/home/" class="btn btn-primary" style="background-color: #5768ad;">Return to Dashboard</a></center>
                </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sahaayak\resources\views/question/allquestions.blade.php ENDPATH**/ ?>