
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="/home/questionnaires/<?php echo e($questionnaire->id); ?>/getResult" method="post">
                <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header"><?php echo e($questionnaire->questionnaireTitle); ?></div>

                <div class="card-body">
                   
                </div>
            </div>

            <?php $__currentLoopData = $questionnaire->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mt-4" >
                <div class="card-header"><?php echo e($key+1); ?> <?php echo e($question->question); ?></div>
                    <div class="card-body">
                        <?php $__errorArgs = ['responses'.$key.'answer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <ul class="list-group">
                        <?php $__currentLoopData = $question->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label for="answer<?php echo e($answer->id); ?>">
                            <li class="list-group-item">
                                <input type="radio" name="response[<?php echo e($key); ?>][answer_id]" id="answer<?php echo e($answer->id); ?>" 
                                <?php echo e((old('response.'.$key.'.answer_id') ==  $answer->id) ? 'checked':''); ?>

                                 class="mr-2" value="<?php echo e($answer->id); ?>">
                                </input>
                                <?php echo e($answer->answer); ?>

                    <input type="hidden" name="response[<?php echo e($key); ?>][question_id]" id="answer<?php echo e($question->id); ?>"></input>
                            </li>
                        </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <button class="btn btn-dark" type="submit">complete survey</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/survey/show.blade.php ENDPATH**/ ?>