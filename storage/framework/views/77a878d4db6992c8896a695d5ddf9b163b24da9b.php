
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e($questionnaire->questionnaireTitle); ?></div>

                <div class="card-body">
                   <a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/create" class="btn btn-dark">Add new Question</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\sahayak1\sahaayak\resources\views/questionnaire/show.blade.php ENDPATH**/ ?>