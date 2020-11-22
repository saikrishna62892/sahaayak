
<?php $__env->startSection('content'); ?>
<br>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-45 p-b-30">
        <a style="color: #5768ad;float: right;" href="<?php echo e(url('/')); ?>" class="primary-btn">Home</a>
           <form action="/user/home/edit/<?php echo e(Auth::user()->id); ?>/updateDetails" method="post" enctype="multipart/form-data">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <span class="login100-form-title p-b-25">
                        Edit <?php echo e(Auth::user()->name); ?> Details
            </span>            
            <?php echo $__env->make('auth.registerForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Submit</button></center>
           </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.reg_forms_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Sahaayak\sahaayak\resources\views/auth/edit.blade.php ENDPATH**/ ?>