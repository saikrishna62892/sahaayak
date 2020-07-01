

    <?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Discover Stories</h2>
                        <h5>Some text.................</h5>
                        <div class="breadcrumb__widget">
                            <a href="./index.html">Home</a>
                            <span>Stories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-1 order-1">
                    <div class="row">
                        <h4>Stories</h4>
                        <?php $count=0; ?>
                        <!-- Faq Begin -->
                        <div class="faq spad">
                            <div class="container">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-11">
                                        <div class="faq__accordion">
                                            <div class="accordion" id="accordionExample">
                                                <?php $__currentLoopData = $stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="card">
                                                        <?php if($count==0): ?>
                                                            <div class="card-heading active">
                                                        <?php else: ?>
                                                            <div class="card-heading">
                                                        <?php endif; ?>
                                                            <a data-toggle="collapse" data-target="#collapse<?php echo e($story->id); ?>">
                                                                <span><?php echo e($story->title); ?></span>
                                                            </a>
                                                        </div>
                                                        <?php if($count==0): ?>
                                                            <div id="collapse<?php echo e($story->id); ?>" class="collapse show" data-parent="#accordionExample">
                                                        <?php else: ?>
                                                            <div id="collapse<?php echo e($story->id); ?>" class="collapse" data-parent="#accordionExample">
                                                        <?php endif; ?>
                                                        <?php $count++; ?>

                                                            <div class="card-body">
                                                                <div class="blog__details__large">
                                                                    <?php if(is_null($story->image)): ?>
                                                                        <img src="<?php echo e(asset('/img/stories/default.PNG')); ?>" alt="" width="700" height="350">
                                                                    <?php else: ?>
                                                                        <img src="<?php echo e(asset('/img/stories/'.$story->image)); ?>" alt="" width="700" height="350">
                                                                    <?php endif; ?>
                                                                    <span><?php echo e($story->category); ?></span>
                                                                </div>
                                                                <div class="blog__details__text blog__item__text">
                                                                    <ul>
                                                                        <li><i class="fa fa-calendar-o"></i><?php echo e($story->created_at); ?></li>
                                                                        <li><a href="<?php echo e(route('increment', $story)); ?>" class="fa fa-thumbs-up" style="color: black"></a><?php echo e($story->likes); ?></li>
                                                                    </ul>
                                                                    <p><?php echo e($story->content); ?></p>
                                                                    <h6>Post yor stories anonymously <a href="#" style="color: #5768ad;">Register here.</a></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Faq End -->
                        
                        <div class="col-lg-12">
                            <div class="classes__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#"><span class="arrow_carrot-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-2 order-2">
                    <div class="blog__sidebar">
                        <div class="row">
                            <div class="blog__sidebar__categories">
                                <h4>Categories</h4>
                                <ul>
                                    <li><a href="#">All(<?php echo e($count); ?>)</a></li>
                                    <li><a href="#">Depression(<?php echo e(count($category_count[0])); ?>)</a></li>
                                    <li><a href="#">Suicide(<?php echo e(count($category_count[1])); ?>)</a></li>
                                    <li><a href="#">Stress(<?php echo e(count($category_count[2])); ?>)</a></li>
                                    <li><a href="#">Stigma(<?php echo e(count($category_count[3])); ?>)</a></li>
                                </ul>
                            </div>
                            <br>
                            <div class="blog__sidebar__categories">
                                <h4>.</h4>
                                <ul>
                                    <li><a href="#">&emsp;Healthy Sleep(<?php echo e(count($category_count[4])); ?>)</a></li>
                                    <li><a href="#">&emsp;Mental Illness<?php echo e(count($category_count[5])); ?>)</a></li>
                                    <li><a href="#">&emsp;Hopelessness(<?php echo e(count($category_count[6])); ?>)</a></li>
                                    <li><a href="#">&emsp;Fear of Loss(<?php echo e(count($category_count[7])); ?>)</a></li>
                                    <li><a href="#">&emsp;Social Isolation(<?php echo e(count($category_count[8])); ?>)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__sidebar__recent">
                            <h4>Recent News</h4>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="img/blog/br-1.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>09 Kinds Of Vegetables Protect The Liver</h6>
                                    <span>MAR 05, 2019</span>
                                    <a href="#">More</a>
                                </div>
                            </div>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="img/blog/br-2.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>Tips You To Balance Nutrition Meal Day</h6>
                                    <span>MAR 05, 2019</span>
                                    <a href="#">More</a>
                                </div>
                            </div>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="img/blog/br-3.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>4 Principles Help You Lose Weight With Vegetables</h6>
                                    <span>MAR 05, 2019</span>
                                    <a href="#">More</a>
                                </div>
                            </div>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="img/blog/br-1.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>09 Kinds Of Vegetables Protect The Liver</h6>
                                    <span>MAR 05, 2019</span>
                                    <a href="#">More</a>
                                </div>
                            </div>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="img/blog/br-2.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>Tips You To Balance Nutrition Meal Day</h6>
                                    <span>MAR 05, 2019</span>
                                    <a href="#">More</a>
                                </div>
                            </div>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="img/blog/br-3.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>4 Principles Help You Lose Weight With Vegetables</h6>
                                    <span>MAR 05, 2019</span>
                                    <a href="#">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

<?php $__env->stopSection(); ?>



















<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views//stories/show.blade.php ENDPATH**/ ?>