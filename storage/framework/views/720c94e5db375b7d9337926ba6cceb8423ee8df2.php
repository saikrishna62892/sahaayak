

<?php $__env->startSection('name'); ?>
        Verify
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="card mt-4 shadow-lg p-3 mb-5 bg-white rounded" >
                            <div class="card-header" align="center"><h3 style="color: #5768ad;"><?php echo e(__('Verify Your Email Address')); ?></h3></div>
                            <div class="card-body">
                                <?php if(session('resent')): ?>
                                    <div role="alert">
                                        <p><?php echo e(__('A fresh verification link has been sent to your email address.')); ?></p>
                                    </div>
                                <?php endif; ?>

                                <p><?php echo e(__('Before proceeding, please check your email for a verification link.')); ?>

                                <?php echo e(__('If you did not receive the email yet')); ?></p>
                                <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <center><button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="color: #5768ad;"><?php echo e(__('Click here to request another')); ?></button></center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sahaayak\resources\views/auth/verify.blade.php ENDPATH**/ ?>