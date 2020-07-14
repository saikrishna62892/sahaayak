

<?php $__env->startSection('name'); ?>
    <?php echo e($questionnaire->questionnaireTitle); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <h1 style="color: #fff;"><?php echo e($questionnaire->questionnaireTitle); ?></h1>
                    </div>
                    <p style="color: #fff;">Slide down to complete the survey and submit it to get your assessment score</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="/home/questionnaires/<?php echo e($questionnaire->id); ?>/getResult" method="post">
                <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $questionnaire->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mt-4 shadow p-4 mb-5 bg-white rounded" >
                <div class="card-header"><?php echo e($key+1); ?>) <?php echo e($question->question); ?></div>
                    <div class="card-body">
                        <?php $__errorArgs = ['response.'.$key.'.answer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">This question needs to be answered}</small>
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
                                <?php echo e($answer->answer); ?>

                    <input type="hidden" name="response[<?php echo e($key); ?>][question_id]" id="answer<?php echo e($question->id); ?>">

                            </li>
                        </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <center><button class="btn btn-dark" type="submit" style="background-color: #5768ad;">complete survey</button></center>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/survey/show.blade.php ENDPATH**/ ?>