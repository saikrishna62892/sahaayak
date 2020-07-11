
<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        &emsp;
        <h4 align="center">Edit Questionnaire</h4>

        <div class="card-body">
           <form action="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo $__env->make('questionnaire.questionnaire', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Edit Questionnaire</button></center>
           </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\sahayak1\sahaayak\resources\views/questionnaire/edit.blade.php ENDPATH**/ ?>