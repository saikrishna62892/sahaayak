

    <?php $__env->startSection('content'); ?>

    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="/img/breadcrumb1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <?php echo $__env->yieldContent('breadcrumb'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Classes Section Begin -->
    <section class="classes-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="classes__details">
                        <?php echo $__env->yieldContent('learncontent'); ?>
                        <!-- Faq Begin -->
                        <?php echo $__env->yieldContent('faq'); ?>
                        <!-- Faq End -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="classes__sidebar">
                        <div class="classes__sidebar__item classes__sidebar__item--info">
                            <h4><?php echo $__env->yieldContent('learnname'); ?></h4>
                        </div>
                        <div class="classes__sidebar__item">
                            <h4>Review & Comment</h4>
                            <div class="classes__sidebar__comment__list">
                                <?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="classes__sidebar__comment">
                                    <div class="classes__sidebar__comment__pic">
                                        <img src="/img/classes-details/default.png" alt="">
                                        <div class="classes__sidebar__comment__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                    <div class="classes__sidebar__comment__text">
                                        <span><?php echo e($comment->created_at); ?></span>
                                        <h6><?php echo e($comment->user->name); ?></h6>
                                        <p><?php echo e($comment->comment); ?></p>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p>No Reviews Yet.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->

    <!-- Leave Comment Begin -->
    <div class="leave-comment spad" style="padding: 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="leave__comment__text">
                        <div class="section-title">
                        <img src="/img/icon.png" alt="Sahaayak" width="58" height="38">
                        <h2>Leave a Comment</h2>
                        </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>Drop Your Comment Here (Note: Comments can't be deleted)</h5>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <form action="/home/learn/<?php echo e($learn); ?>/comment/<?php echo e($learnID); ?>" method="post">
                                    <textarea placeholder="Your Comment" name="comment" rows="3" required autocomplete="off"></textarea>
                                    <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="site-btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Leave Comment End -->

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Sahaayak\sahaayak\resources\views/layouts/learn.blade.php ENDPATH**/ ?>