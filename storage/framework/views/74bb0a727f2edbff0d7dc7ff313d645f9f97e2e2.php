<div class="form-group">
    <label for="questionnaireTitle">Please enter title of the questionnaire</label>
    <input type="text" class="form-control" name="questionnaireTitle" id="questionnaireTitle" aria-describedby="titleHelp" placeholder="Enter title" value="<?php echo e(old('questionnaireTitle') ?? $questionnaire->questionnaireTitle); ?>">
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
    <label for="questionnairePurpose">Enter purpose of the questionnaire</label>
    <input type="text" class="form-control" name="questionnairePurpose" id="questionnairePurpose" aria-describedby="purposeHelp" placeholder="Enter purpose" value="<?php echo e(old('questionnairePurpose') ?? $questionnaire->questionnairePurpose); ?>">
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
<?php echo csrf_field(); ?>
<?php /**PATH C:\sahaayak\resources\views/questionnaire/questionnaire.blade.php ENDPATH**/ ?>