


<?php $__env->startSection('name'); ?>
    <?php echo e($counsellor->name); ?> details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br>
<div class="container col-lg-8">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <div class="card-header"><h3 align="center"><?php echo e($counsellor->name); ?> details</h3></div>
        <div class="row">
            <div class="card-body" style="width: 60%;">
                <div class="form-group">
                    <label for="name"><strong>Name : </strong></label>
                    <?php echo e($counsellor->name); ?>

                </div>
                <div class="form-group">
                    <label for="name"><strong>College ID : </strong></label>
                    <a href="tel:<?php echo e($counsellor->phone); ?>" style="color: #000;"> <?php echo e($counsellor->college_id); ?></a>
                </div>
                <div class="form-group">
                    <label for="name"><strong>Email : </strong></label>
                    <a href="mailto:<?php echo e($counsellor->email); ?>" style="color: #000;"><u><?php echo e($counsellor->email); ?></u></a>
                </div>
                <div class="form-group">
                    <label for="name"><strong>Google Calendar URL : </strong></label>
                    <a href="mailto:<?php echo e($counsellor->calendar_url); ?>" style="color: #000;"><u><?php echo e($counsellor->calendar_url); ?></u></a>
                </div>
                <div class="form-group">
                    <label for="name"><strong>Profession : </strong></label>
                    <?php echo e($counsellor->profession); ?>

                </div>
                <div class="form-group">
                    <label for="name"><strong>Bio : </strong></label>
                    <?php echo e($counsellor->bio); ?>

                </div>
                <div class="form-group">
                    <label for="name"><strong>Achievements : </strong></label>
                    <?php echo e($counsellor->achievements); ?>

                </div>
    		</div>
            <div class="card-body" style="width: 40%;">
                <div align="right">
                    <a href="/admin/home/counsellor/<?php echo e($counsellor->id); ?>/editDetails" style="color: #5768ad;">Edit Details</a>&emsp;
                </div>
                <br>
                <div class="form-group">
                    <img style="float: right;" src="<?php echo e(asset('/img/counsellors/'.$counsellor->image)); ?>" width="100" height="100">
                </div>
            </div>
        </div>
            <div align="right">
                    <a href="/admin/home" style="color: #5768ad;">Return to Dashboard</a>&emsp;
            </div>
    	</div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Sahaayak\sahaayak\resources\views/counsellors/getDetails.blade.php ENDPATH**/ ?>