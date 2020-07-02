
<?php $__env->startSection('content'); ?>

            <div class="card">
                <div class="card-header">Edit Question</div>

                <div class="card-body">
                   <form action="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/<?php echo e($question->id); ?>" method="post">
                   	<?php echo method_field('PATCH'); ?>
                    <?php echo $__env->make('question.question', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                   </form>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/question/edit.blade.php ENDPATH**/ ?>