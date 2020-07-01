<div class="card">
    <div class="card-header">Available Questionnaires</div>

        <div class="card-body">
            <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $questionnaire->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($question->question); ?></td>
<td>
    <a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/<?php echo e($question->id); ?>/edit" class="btn btn-dark">Edit </a>
</td>
<td>
    <form action="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/<?php echo e($question->id); ?>" method="post">
        <?php echo method_field('DELETE'); ?>
        <?php echo csrf_field(); ?>
        <button>delete</button>
    </form>
</td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>   
            <div>
                <a href="/admin/home/questionnaires/create" class="btn btn-dark">create new questionnaire</a>
            </div>
    </div>
</div><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/question/allquestions.blade.php ENDPATH**/ ?>