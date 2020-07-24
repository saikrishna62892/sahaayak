

<?php $__env->startSection('name'); ?>
    News
<?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>

    
    
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Recent News</h2>
                        <div class="breadcrumb__widget">
                            <a href="<?php echo e(url('/')); ?>">Home</a>
                            <span>News</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Classes Section Begin -->
    <section class="classes spad">
        <div class="container">
            <div class="col-lg-12">
                    <div class="section-title">
                        <img src="img/icon.png" alt="Sahaayak" width="58" height="38">
                        <h2>Top News</h2>
                        <p>The trainings are multi-style and you will learn and practice Hatha Vinyasa (flow)<br /> and
                            Yin Yoga.</p>
                    </div>
                </div>
            <div class="row">
                



                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="classes__item">
                        
                        <?php if(is_null($item->image)): ?>
                            <div class="classes__item__pic set-bg" data-setbg="img/news/default1.jpg">
                        <?php else: ?>
                            <div class="classes__item__pic set-bg" data-setbg="img/news/<?php echo e($item->image); ?>">
                        <?php endif; ?>
                            <span><?php echo e(Carbon\Carbon::parse($item->created_at)->format('d-M-Y')); ?></span>
                        </div>
                        <div class="classes__item__text">
                            <p>Source:<?php echo e($item->source); ?></p>
                            <h4><?php echo e($item->headline); ?></h4>
                            <h6 align="justify" style="color:#9B9EA3;overflow: hidden;display: -webkit-box;-webkit-line-clamp: 12;-webkit-box-orient: vertical;white-space: pre-wrap"><?php echo e($item->content); ?></span></h6>
                            <a href="<?php echo e($item->newsurl); ?>" class="class-btn" target="_blank" >Read More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-12"><span><?php echo e($news->links()); ?></span></div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\sahayak1\sahaayak\resources\views//news/show.blade.php ENDPATH**/ ?>