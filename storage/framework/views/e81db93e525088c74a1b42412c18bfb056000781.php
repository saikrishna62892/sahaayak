
<?php $__env->startSection('content'); ?>
	<br>
	<div class="container">
	    <div class="card">
	        <div class="card-body">
	        	<?php $question_count = App\Question::where('questionnaire_id',$questionnaire->id)->get() ?>
	        	<h4>Question #<?php echo e($question_count->count()+1); ?></h4>
	            <?php echo $__env->make('question.question', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	        </div>
	    </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sahaayak\resources\views/question/create.blade.php ENDPATH**/ ?>