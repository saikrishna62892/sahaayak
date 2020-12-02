
<?php $__env->startSection('name'); ?>
    Videos
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
    
    <!-- Blog Hero Begin -->
    <section class="breadcrumb-option blog-hero set-bg" data-setbg="/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Motivational Videos</h2>
                        <div class="breadcrumb__widget">
                            <a href="<?php echo e(url('/')); ?>">Home</a>
                            <span>Videos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Hero End -->
    
<!-- Blog Details Section Begin -->
    <section class="blog-details spad" style="padding-top: 0px;">
        <div class="container">
            <?php $__currentLoopData = $embedURLs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $embedURL2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <?php $__currentLoopData = $embedURL2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $embedURL): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="blog__details">
                        <div class="blog__details__author">
                            <!--<div class="blog__details__author__pic">
                                <img src="img/blog/details/blog-posted.png" alt="">
                            </div>
                            <div class="blog__details__author__text">
                                <h4>Author: </h4>
                                <p>Inspired from :</p>
                                <p><span>Tags:</span> All, Trending, Fuel, Cardio, Life Style</p>
                            </div>-->
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <?php echo $embedURL; ?>

                            
                        </div>      
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-12"><span><?php echo e($urls->links()); ?></span></div>
        
        </div>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Sahaayak\sahaayak\resources\views/video/show.blade.php ENDPATH**/ ?>