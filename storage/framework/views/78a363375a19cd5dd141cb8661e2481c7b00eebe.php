<div class="card">
    <div class="card-body">
        <form action="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="question">Please enter the question</label>
                <input type="text" class="form-control" name="question[question]" id="question" 
                value="<?php echo e(old('question.question') ?? $question->question); ?>" aria-describedby="questionHelp" placeholder="Your question here...">
                <?php $__errorArgs = ['question.question'];
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
                <fieldset>
                    <legend>Choices</legend>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="answers[][answer]"id="answer1" aria-describedby="choiceHelp" value="<?php echo e(old('answers.0.answer') ?? $answers[0]->answer); ?>"placeholder="Enter choice 1">
                            <?php $__errorArgs = ['answers.0.answer'];
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
                        <div class="form-group col-lg-6">
                            <input type="number" class="form-control" name="answers[0][point]"id="point" aria-describedby="choiceHelp" value="<?php echo e(old('answers.0.point') ?? $answers[0]->point); ?>" placeholder="Enter points (0 to 1)" min="0" max="1" step="0.25">
                            <?php $__errorArgs = ['answers.0.point'];
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
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="answers[][answer]"id="answer2" aria-describedby="choiceHelp" value="<?php echo e(old('answers.1.answer') ?? $answers[1]->answer); ?>" placeholder="Enter choice 2">
                            <?php $__errorArgs = ['answers.1.answer'];
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
                        <div class="form-group col-lg-6">
                            <input type="number" class="form-control" name="answers[1][point]"id="point" aria-describedby="choiceHelp" value="<?php echo e(old('answers.1.point') ??  $answers[1]->point); ?>" placeholder="Enter points (0 to 1)"  min="0" max="1" step="0.25">
                            <?php $__errorArgs = ['answers.1.point'];
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
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="answers[][answer]"id="answer3" aria-describedby="choiceHelp" value="<?php echo e(old('answers.2.answer') ?? $answers[2]->answer); ?>" placeholder="Enter choice 3">
                            <?php $__errorArgs = ['answers.2.answer'];
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
                        <div class="form-group col-lg-6">
                            <input type="number" class="form-control" name="answers[2][point]"id="point" aria-describedby="choiceHelp" value="<?php echo e(old('answers.2.point') ?? $answers[2]->point); ?>" placeholder="Enter points (0 to 1)"  min="0" max="1" step="0.25">
                            <?php $__errorArgs = ['answers.2.point'];
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
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="answers[][answer]"id="answer4" aria-describedby="choiceHelp" value="<?php echo e(old('answers.3.answer') ?? $answers[3]->answer); ?>" placeholder="Enter choice 4">
                            <?php $__errorArgs = ['answers.3.answer'];
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
                        <div class="form-group col-lg-6">
                            <input type="number" class="form-control" name="answers[3][point]"id="point" aria-describedby="choiceHelp" value="<?php echo e(old('answers.3.point') ?? $answers[3]->point); ?>" placeholder="Enter points (0 to 1)"  min="0" max="1" step="0.25">
                            <?php $__errorArgs = ['answers.3.point'];
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
                    </div>
                </fieldset>
            </div>
            <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Save Question</button></center>
        </form>
    </div>
</div><?php /**PATH C:\sahaayak\resources\views/question/question.blade.php ENDPATH**/ ?>