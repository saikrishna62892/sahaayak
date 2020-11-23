<div class="card">
    <div class="card-body">
		<form action="<?php echo e(route('addTalksFields')); ?>" method="POST" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<?php echo $__env->make('talks.talk', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			&emsp;
				<center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;" onclick="alert('Posted Succesfully')">Post Talk</button></center>
		</form>
	</div>
</div><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/talks/create.blade.php ENDPATH**/ ?>