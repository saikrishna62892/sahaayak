

    <?php $__env->startSection('content'); ?>

    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="/img/breadcrumb.jpg">
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
                        <!--<div class="classes__details__desc">
                            <h6>Causes:</h6>
                            <ul>
                                <li><span class="icon_check"></span> All their equipment and instruments are alive.</li>
                                <li><span class="icon_check"></span> The that about to watched storm, so beautiful
                                    terrific.</li>
                                <li><span class="icon_check"></span> There are many variations of passages of lorem
                                    ppsum available.</li>
                                <li><span class="icon_check"></span> If you are going to use a passage of you need to be
                                    sure.</li>
                            </ul>
                        </div>
                        <div class="classes__details__desc">
                            <h6>Precautions:</h6>
                            <ul>
                                <li><span class="icon_check"></span> All their equipment and instruments are alive.</li>
                                <li><span class="icon_check"></span> The that about to watched storm, so beautiful
                                    terrific.</li>
                                <li><span class="icon_check"></span> There are many variations of passages of lorem
                                    ppsum available.</li>
                                <li><span class="icon_check"></span> If you are going to use a passage of you need to be
                                    sure.</li>
                            </ul>
                        </div>
                        <div class="classes__details__desc">
                            <h6>Reasons:</h6>
                            <ul>
                                <li><span class="icon_check"></span> All their equipment and instruments are alive.</li>
                                <li><span class="icon_check"></span> The that about to watched storm, so beautiful
                                    terrific.</li>
                                <li><span class="icon_check"></span> There are many variations of passages of lorem
                                    ppsum available.</li>
                                <li><span class="icon_check"></span> If you are going to use a passage of you need to be
                                    sure.</li>
                            </ul>
                        </div>-->


                        <!-- Faq Begin -->
                         <?php echo $__env->yieldContent('faq'); ?>
                            
                            <!-- Faq End -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="classes__sidebar">
                        <div class="classes__sidebar__item classes__sidebar__item--info">
                            <h4><?php echo $__env->yieldContent('learnname'); ?></h4>
                            <ul class="classes__sidebar__item__widget">
                                <li><span class="icon_calendar"></span>Date: </li>
                                <li><span class="icon_clock_alt"></span>Time: </li>
                            </ul>
                            <a href="#" class="sidebar-btn">Visit Website</a>
                        </div>
                        <!--<div class="classes__sidebar__item">
                            <h4>Posted by</h4>
                            <div class="classes__sidebar__instructor">
                                <div class="classes__sidebar__instructor__pic">
                                    <img src="img/classes-details/classes-instructor.png" alt="">
                                </div>
                                <div class="classes__sidebar__instructor__text">
                                    <div class="classes__sidebar__instructor__title">
                                        <h4>Name</h4>
                                        <span>Profession</span>
                                    </div>
                                    <p>Description<br /> Description</p>
                                    <div class="classes__sidebar__instructor__social">
                                        <a href="#"><span class="social_facebook"></span></a>
                                        <a href="#"><span class="social_twitter"></span></a>
                                        <a href="#"><span class="social_instagram"></span></a>
                                        <a href="#"><span class="social_linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="classes__sidebar__item">
                            <h4>Review & Comment</h4>
                            <div class="classes__sidebar__comment__list">
                                <?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="classes__sidebar__comment">
                                    <div class="classes__sidebar__comment__pic">
                                        <img src="/img/classes-details/comment-1.png" alt="">
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
    <div class="leave-comment spad">
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
                                    <div class="leave__comment__rating">
                                        <h5>Your Rating:</h5>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <form action="/home/learn/<?php echo e($learn); ?>/comment/<?php echo e($learnID); ?>" method="post">
                                    <textarea placeholder="Your Comment" name="comment"></textarea>
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
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/layouts/learn.blade.php ENDPATH**/ ?>