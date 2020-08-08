<?php $__empty_1 = true; $__currentLoopData = $recent_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="blog__recent__item">
        <div class="blog__recent__item__pic">
            <?php if(is_null($news->image)): ?>
                <img src="<?php echo e(asset('/img/news/default1.jpg')); ?>" alt="" width="70" height="70">
            <?php else: ?>
                <img src="<?php echo e(asset('/img/news/'.$news->image)); ?>" alt="" width="70" height="70">
            <?php endif; ?>
        </div>
        <div class="blog__recent__item__text">
            <h6><?php echo e($news->headline); ?></h6>
            <span><?php echo e(Carbon\Carbon::parse($news->created_at)->format('d-M-Y')); ?></span>
            <a href="<?php echo e(url('displayNews')); ?>" style="color: #5768ad;">More</a>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <h5 align="center">No News Available</h5>
<?php endif; ?><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/news/recent_news.blade.php ENDPATH**/ ?>