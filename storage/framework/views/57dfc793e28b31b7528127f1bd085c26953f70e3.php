
<?php $__env->startSection('content'); ?>
            <div class="card">
                <div class="card-header">Edit Questionnaire</div>

                <div class="card-body">
                   <form action="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>" method="post">
                    <?php echo method_field('PATCH'); ?>
                    <?php echo $__env->make('questionnaire.questionnaire', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <button  type="submit" class="btn btn-primary">save questionnaire</button>
                   </form>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/questionnaire/edit.blade.php ENDPATH**/ ?>