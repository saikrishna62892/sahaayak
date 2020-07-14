
<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
    	&emsp;
        <h4 align="center"><?php echo e($questionnaire->questionnaireTitle); ?></h4>

        <div class="main-content-inner" id="table">
		    <div class="single-table">
		        <div class="table-responsive">
		            <table class="table table-hover progress-table text-center">
		                <thead class="text-uppercase">
		                    <tr>
		                        <th scope="col">S.No</th>
		                        <th scope="col">Question</th>
		                        <th scope="col">Created_at</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <?php $count=1 ?>
		                    <?php $__empty_1 = true; $__currentLoopData = $questionnaire->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		                    <tr>
		                        <td scope="row"><?php echo e($count++); ?></td>
		                        <td><?php echo e($question->question); ?></td>
		                        <td><?php echo e($question->created_at); ?></td>
		                    </tr>
		        			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					        <h5>No Questions available..</h5>
					        <?php endif; ?>
		                </tbody>
		            </table>
		        </div>
		    </div>
		</div>
        <div class="card-body">
           <center><a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions/create" class="btn primary-btn" style="background-color: #5768ad;color: #fff;">Add new Question</a>&emsp;
           <a href="/admin/home/questionnaires/<?php echo e($questionnaire->id); ?>/complete" class="btn primary-btn" style="background-color: #5768ad;color: #fff;">Complete Questionnaire</a></center>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sahaayak\resources\views/questionnaire/show.blade.php ENDPATH**/ ?>