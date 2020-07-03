<?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" name="question[question]" id="question" 
                        value="<?php echo e(old('question.question') ?? $question->question); ?>" aria-describedby="questionHelp" placeholder="Enter Question">
                        <small id="questionHelp" class="form-text text-muted">enter the question.</small>
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
                            <small id="choicesHelp" class="form-text text-muted">enter the choices.</small>

                        <div>
                                <div class="form-group">
                        <label for="answer1">choice 1</label>
                        <input type="text" class="form-control" name="answers[][answer]"id="answer1" aria-describedby="choiceHelp" value="<?php echo e(old('answers.0.answer') ?? $answers[0]->answer); ?>"placeholder="Enter choice 1">
                        <small id="choicesHelp" class="form-text text-muted">enter choice 1</small>
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
                        </div>

                        <div>
                                <div class="form-group">
                        <label for="point">point 1</label>
                        <input type="number" class="form-control" name="answers[0][point]"id="point" aria-describedby="choiceHelp" value="<?php echo e(old('answers.0.point') ?? $answers[0]->point); ?>" placeholder="Enter points">
                        <small id="choicesHelp" class="form-text text-muted">points</small>
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

                        <div>
                                <div class="form-group">
                        <label for="answer2">choice 2</label>
                        <input type="text" class="form-control" name="answers[][answer]"id="answer2" aria-describedby="choiceHelp" value="<?php echo e(old('answers.1.answer') ?? $answers[1]->answer); ?>" placeholder="Enter choice 2">
                        <small id="choicesHelp" class="form-text text-muted">enter choice 2</small>
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
                        </div>

                        <div>
                                <div class="form-group">
                        <label for="point">point 2</label>
                        <input type="number" class="form-control" name="answers[1][point]"id="point" aria-describedby="choiceHelp" value="<?php echo e(old('answers.1.point') ??  $answers[1]->point); ?>" placeholder="Enter points">
                        <small id="choicesHelp" class="form-text text-muted">points</small>
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

                        <div>
                                <div class="form-group">
                        <label for="answer3">choice 3</label>
                        <input type="text" class="form-control" name="answers[][answer]"id="answer3" aria-describedby="choiceHelp" value="<?php echo e(old('answers.2.answer') ?? $answers[2]->answer); ?>" placeholder="Enter choice 3">
                        <small id="choicesHelp" class="form-text text-muted">enter choice 3</small>
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
                        </div>

                        <div>
                                <div class="form-group">
                        <label for="point">point 3</label>
                        <input type="number" class="form-control" name="answers[2][point]"id="point" aria-describedby="choiceHelp" value="<?php echo e(old('answers.2.point') ?? $answers[2]->point); ?>" placeholder="Enter points">
                        <small id="choicesHelp" class="form-text text-muted">points</small>
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

                        <div>
                                <div class="form-group">
                        <label for="answer4">choice 4</label>
                        <input type="text" class="form-control" name="answers[][answer]"id="answer4" aria-describedby="choiceHelp" value="<?php echo e(old('answers.3.answer') ?? $answers[3]->answer); ?>" placeholder="Enter choice 1">
                        <small id="choicesHelp" class="form-text text-muted">enter choice 4</small>
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
                        </div>

                        <div>
                                <div class="form-group">
                        <label for="point">point 4</label>
                        <input type="number" class="form-control" name="answers[3][point]"id="point" aria-describedby="choiceHelp" value="<?php echo e(old('answers.3.point') ?? $answers[3]->point); ?>" placeholder="Enter points">
                        <small id="choicesHelp" class="form-text text-muted">points</small>
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
                    
                        <button  type="submit" class="btn btn-primary">save question</button><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/question/question.blade.php ENDPATH**/ ?>