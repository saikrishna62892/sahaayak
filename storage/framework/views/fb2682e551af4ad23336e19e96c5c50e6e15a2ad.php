
    <?php $__env->startSection('content'); ?>

    
    
    <!-- Blog Hero Begin -->
    <section class="breadcrumb-option blog-hero set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Playlists</h2>
                        <div class="breadcrumb__widget">
                            <a href="./index.html">Home</a>
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
                <div class="col-lg-6 order-lg-2 order-1">
                <?php $count=1; ?>
                <?php $__currentLoopData = $playlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h2> <?php echo e($count++); ?></h2>
                    <div class="blog__details">
                        <div class="blog__details__author">
                            <div class="blog__details__author__pic">
                            </div>
                            <div class="blog__details__author__text">
                            <?php if(is_null($i->image)): ?>
                                    <img src="<?php echo e(asset('/img/playlists/default.png')); ?>" alt="">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('/img/playlists/'.$i->image)); ?>" alt="">
                                <?php endif; ?>
                            </div>
                    
                                <h4>Source: <?php echo e($i->playlistSource); ?> </h4>
                                 <p>Tag : <?php echo e($i->playlistTag); ?></p>
                                
                                <p> URL: <?php $link="https://$i->playlistURL" ?>
                            <p><a href="<?php echo e($link); ?>" style="color:#5768ad;" target="_blank">Click Here</a></p></p>
                                
                            </div>
                        </div>
        
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                        <div class="blog__details__quote">
                            <p>link to the pocast/playlist and a short description about that</p>
                            <p><a href="" style="color:#5768ad;">Open Playlist</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="classes__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#"><span class="arrow_carrot-right"></span></a>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\sahayak1\sahaayak\resources\views/playlists.blade.php ENDPATH**/ ?>