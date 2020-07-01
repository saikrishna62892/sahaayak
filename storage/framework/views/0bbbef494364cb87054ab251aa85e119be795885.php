<div class="card">
        <div class="card-body">
            <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $questionnaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionnaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/create"><?php echo e($questionnaire->questionnaireTitle); ?></a>
                        </td>
                        <td><a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/edit" class="btn btn-dark">Edit Questionnaire </a></td>
                        <td>
                        <form action="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>" method="post">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button>delete</button>
                        </form>
                        </td>
                        <td>
                            <a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/editQuestions" class="btn btn-dark">Edit Questions</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <!--
            <?php $__currentLoopData = $questionnaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionnaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/create"><?php echo e($questionnaire->questionnaireTitle); ?></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            -->      
            <div>
                <a href="/admin/home/questionnaires/create" class="btn btn-dark">create new questionnaire</a>
            </div>
    </div>
</div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/questionnaire/allquestionnaires.blade.php ENDPATH**/ ?>