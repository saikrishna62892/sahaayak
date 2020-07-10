
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>
<div align="right">
    <a href="/admin/home/questionnaires/create" class="btn btn-primary" style="background-color: #5768ad;">create new questionnaire</a>
</div>
<div class="main-content-inner" id="table">
    <h4 class="header-title">Assessments table</h4>
    <div class="single-table">
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Title/Add Questions</th>
                        <th scope="col">Purpose</th>
                        <th scope="col" colspan="2">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    <?php $__currentLoopData = $questionnaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionnaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td scope="row"><?php echo e($count++); ?></td>
                        <td><a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/create" style="color: #5768ad;"><?php echo e($questionnaire->questionnaireTitle); ?></a></td>
                        <td><?php echo e($questionnaire->questionnairePurpose); ?></td>
                        <td><a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/edit" style="color: #5768ad;">Edit Questionnaire </a></td>
                        <td><a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/editQuestions" style="color: #5768ad;">Edit Questions</a></td>
                        <td><form action="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>" method="post">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button style="color: #5768ad;background:none!important;border:none;">Delete Quesionnaire</button>
                            </form></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/questionnaire/allquestionnaires.blade.php ENDPATH**/ ?>