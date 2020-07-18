

<?php $__env->startSection('name'); ?>
    Playlists
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>

    
    
    <!-- Blog Hero Begin -->
    <section class="breadcrumb-option blog-hero set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Playlists</h2>
                        <div class="breadcrumb__widget">
                            <a href="<?php echo e(url('/')); ?>">Home</a>
                            <span>Playlists</span>
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
                <?php $__currentLoopData = $playlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-6  order-lg-2 order-1">
                    <div class="blog__details">
                        <div class="blog__details__author">
                            <div class="blog__details__author__pic">
                            </div>
                            <div class="blog__details__author__text">
                            <?php if(is_null($i->image)): ?>
                                    <img src="<?php echo e(asset('/img/playlists/default3.png')); ?>" alt="" width="500" height="250">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('/img/playlists/'.$i->image)); ?>" alt="" width="500" height="250">
                                <?php endif; ?>
                            </div>
                    
                                <h4>Source: <?php echo e($i->playlistSource); ?> </h4>
                                 <p>Tag : <?php echo e($i->playlistTag); ?></p>
                                
                                <p> URL:
                            <a href="<?php echo e($i->playlistURL); ?>" style="color:#5768ad;" target="_blank">Click Here</a></p>
                                
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
                <div class="col-lg-12"><span><?php echo e($playlist->links()); ?></span></div>
            </div>
        </div>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/playlists.blade.php ENDPATH**/ ?>