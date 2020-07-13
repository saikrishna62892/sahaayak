


<?php $__env->startSection('name'); ?>
    Inspire-me
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>

    
    
    <!-- Blog Hero Begin -->
    <section class="breadcrumb-option blog-hero set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Inspire Me</h2>
                        <div class="breadcrumb__widget">
                            <a href="<?php echo e(url('/')); ?>">Home</a>
                            <span>Inspire Me</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Hero End -->
<!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="blog__details">
                        <div class="blog__details__author">
                            <div class="blog__details__author__pic">
                                <?php if(is_null($quote->Image)): ?>
                                    <img src="<?php echo e(asset('/img/quotes/default.png')); ?>" alt="">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('/img/quotes/'.$quote->Image)); ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="blog__details__author__text">
                                <h4>Author:<?php echo e($quote->Author); ?></h4>
                                <p>Inspired from :<?php echo e($quote->Inspired_from); ?></p>
                                <p><span>Tags:</span><?php echo e($quote->Tag); ?></p>
                            </div>
                        </div>
                        <div class="blog__details__quote">
                            <p style="font-size: 25px;font-weight: bold;font-style: italic;font-family: Futura;"><i class="fa fa-quote-left" aria-hidden="true"></i>&nbsp;<?php echo e($quote->Quote); ?>&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i></p>
                            <p><a href="<?php echo e($quote->Link); ?>" style="color:#5768ad;" target="_blank">Read More</a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h4>No Quotes Available</h4>
            <?php endif; ?>

        </div>
        <div class="col-lg-12"><span><?php echo e($quotes->links()); ?></span></div>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/inspire_me.blade.php ENDPATH**/ ?>