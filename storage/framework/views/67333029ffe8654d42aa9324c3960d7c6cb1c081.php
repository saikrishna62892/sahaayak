
<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="card">
    	&emsp;
        <h4 align="center"><?php echo e($questionnaire->questionnaireTitle); ?></h4>

        <div class="card-body">
           <center><a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/create" class="btn primary-btn" style="background-color: #5768ad;color: #fff;">Add new Question</a>&emsp;
           <a href="/admin/home" class="btn primary-btn" style="background-color: #5768ad;color: #fff;">Complete Questionnaire</a></center>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/questionnaire/show.blade.php ENDPATH**/ ?>