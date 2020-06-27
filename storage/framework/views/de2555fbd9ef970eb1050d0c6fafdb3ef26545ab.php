

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Available Questionnaires</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    
                    <?php $__currentLoopData = $questionnaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionnaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                    <a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/create"><?php echo e($questionnaire->questionnaireTitle); ?></a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <div>
                        <a href="/admin/home/questionnaires/create" class="btn btn-dark">create new questionnaire</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Add Videos</div>

                <div class="card-body">
                    <div>
                        <a href="/admin/home/videos/create" class="btn btn-dark">Add New Video</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ganesh\Desktop\temp\sahaayak\resources\views/admin/adminHome.blade.php ENDPATH**/ ?>