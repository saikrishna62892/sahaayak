


<?php $__env->startSection('name'); ?>
    <?php echo e($unapprovedVolunteer->name); ?> details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <div class="card-header"><h3 align="center"><?php echo e($unapprovedVolunteer->name); ?> details</h3></div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name"><strong>Name : </strong></label>
                    <?php echo e($unapprovedVolunteer->name); ?>

                </div>
                <div class="form-group">
                    <label for="name"><strong>Phone : </strong></label>
                    <a href="tel:<?php echo e($unapprovedVolunteer->phone); ?>" style="color: #000;"> <?php echo e($unapprovedVolunteer->phone); ?></a>
                </div>
                <div class="form-group">
                    <label for="name"><strong>Email : </strong></label>
                    <a href="mailto:<?php echo e($unapprovedVolunteer->user->email); ?>" style="color: #000;"><?php echo e($unapprovedVolunteer->user->email); ?></a>
                </div>
                <div class="form-group">
                    <label for="name"><strong>Qualification : </strong></label>
                    <?php echo e($unapprovedVolunteer->qualification); ?>

                </div>
                <div class="form-group">
                    <label for="name"><strong>work : </strong></label>
                    <?php echo e($unapprovedVolunteer->work); ?>

                </div>
                <div class="form-group">
                    <label for="name"><strong>Insight : </strong></label>
                    <?php echo e($unapprovedVolunteer->insight); ?>

                </div>
                <div class="form-group">
                    <label for="name"><strong>Queries : </strong></label>
                    <?php echo e($unapprovedVolunteer->queries); ?>

                </div>
                <div class="form-group">
                    <label for="name"><strong>Identity : </strong></label>
                    <img src="<?php echo e(asset('storage/'.$unapprovedVolunteer->file1)); ?>">
                </div>
                <div class="form-group">
                    <label for="name"><strong>Work Identity : </strong></label>
                    <img src="<?php echo e(asset('storage/'.$unapprovedVolunteer->file2)); ?>">
                </div>
                <div align="right">
                    <a href="/admin/home" style="color: #5768ad;">Return to Dashboard</a>&emsp;
                </div>
    		</div>
    	</div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/volunteer/getDetails.blade.php ENDPATH**/ ?>