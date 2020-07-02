
<?php $__env->startSection('content'); ?>
            <div class="card">
                <div class="card-header">New Questionnaire</div>

                <div class="card-body">
                   <form action="/admin/home/questionnaires" method="post">
                    <?php echo csrf_field(); ?>
                    
                    <?php echo $__env->make('questionnaire.questionnaire', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <button  type="submit" class="btn btn-primary">save questionnaire</button>
                   </form>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/questionnaire/create.blade.php ENDPATH**/ ?>