
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Questionnaire</div>

                <div class="card-body">
                   <form action="/admin/home/questionnaires" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="questionnaireTitle">Title</label>
                        <input type="text" class="form-control" name="questionnaireTitle" id="questionnaireTitle" aria-describedby="titleHelp" placeholder="Enter title">
                        <small id="titleHelp" class="form-text text-muted">enter title of questionnaire.</small>
                        <?php $__errorArgs = ['questionnaireTitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="questionnairePurpose">Purpose</label>
                        <input type="text" class="form-control" name="questionnairePurpose"id="questionnairePurpose" aria-describedby="purposeHelp" placeholder="Enter purpose">
                        <small id="purposeHelp" class="form-text text-muted">enter purpose of questionnaire.</small>
                        <?php $__errorArgs = ['questionnairePurpose'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                        <button  type="submit" class="btn btn-primary">save questionnaire</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\sahayak1\sahaayak\resources\views/questionnaire/create.blade.php ENDPATH**/ ?>