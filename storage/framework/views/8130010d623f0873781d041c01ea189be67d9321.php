    

    <?php $__env->startSection('name'); ?>
        Home
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>



    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <span>We Share coz We Care</span>
                                <h2><?php echo e($dialyquote); ?></h2>
                                <a style="color: white;" href="javascript:void(0);" onclick="javascript:introJs().setOption('showProgress',true).start();"><u><span>Take a Tour</span></u></a>
                                <a href="<?php echo e(url('about')); ?>" class="primary-btn">DISCOVER MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="chooseus__text">
                        <h2 data-step="4" data-intro="Statistics about mental health" data-position="bottom">Stats</h2>
                    </div>
                    <div class="chooseus__item">
                        <div class="chooseus__item__icon">
                            <img src="img/chooseus/choose-4.png" alt="">
                        </div>
                        <div class="chooseus__item__text">
                            <h2 class="choose-counter">258</h2>
                            <p>Thousand suicides in India per year</p>
                        </div>
                    </div>
                    <div class="chooseus__item">
                        <div class="chooseus__item__icon">
                            <img src="img/chooseus/choose-4.png" alt="">
                        </div>
                        <div class="chooseus__item__text">
                            <h2 class="choose-counter">800</h2>
                            <p>Thousand suicides over Globe per year</p>
                        </div>
                    </div>
                    <div class="chooseus__item">
                        <div class="chooseus__item__icon">
                            <img src="img/chooseus/choose-4.png" alt="">
                        </div>
                        <div class="chooseus__item__text">
                            <h2 class="choose-counter">40</h2>
                            <p>Suicide frequency in seconds</p>
                        </div>
                    </div>
                    <div class="chooseus__item">
                        <div class="chooseus__item__icon">
                            <img src="img/chooseus/choose-4.png" alt="">
                        </div>
                        <div class="chooseus__item__text">
                            <h2 class="choose-counter">20</h2>
                            <p>Suicide attempts per day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chooseus__text">
                        <h2 data-step="5" data-intro="Myths & Facts" data-position="left">Myths & Facts</h2>
                        <p>We are offering internationally certified 200 Hour Yoga Teacher Training in Rishikesh and 300
                            hour yoga teacher training in Rishikesh, India - Join us to have such life-transforming
                            experience in The world capital of Yoga in Rishikesh.</p>
                        <p>We are offering internationally certified 200 Hour Yoga Teacher Training in Rishikesh and 300
                            hour yoga teacher training in Rishikesh, India - Join us to have such life-transforming
                            experience in The world capital of Yoga in Rishikesh.</p>
                        <p>We are offering internationally certified 200 Hour Yoga Teacher Training in Rishikesh and 300
                            hour yoga teacher training in Rishikesh, India - Join us to have such life-transforming
                            experience in The world capital of Yoga in Rishikesh.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img src="img/icon.png" alt="Sahaayak" width="58" height="38">
                        <h2 data-step="6" data-intro="purposes" data-position="bottom-middle-aligned">What we can do</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="services__list">
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-1.png" alt="">
                            <h5>purpose1</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-2.png" alt="">
                            <h5>purpose2</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-3.png" alt="">
                            <h5>purpose3</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-4.png" alt="">
                            <h5>purpose4</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- Appoinment Section Begin -->
    <section class="appointment" id="talk_to_us">
        <div class="container">
            <div class="appointment__text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <img src="img/icon-white.png" alt="Sahaayak" width="58" height="38">
                            <h2 data-step="7" data-intro="Talk to Us" data-position="bottom-middle-aligned">Make An Appointment</h2>
                            <small style="color: #fff;">Note: Don't worrry folks we keep your data safe</small>
                        </div>
                    </div>
                </div>
                <form action="/appointment_controller" method="post" class="appointment__form">
                <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Name" name="name">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Email" name="email">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Phone" name="phone">
                        </div>
                        <div class="col-lg-6">
                            <input placeholder="Date & Time" type="datetime-local" name="timings" min="2020-05-10T00:00">
                        </div>
                        <div class="col-lg-12 text-center">
                            <textarea placeholder="What do you want to talk about ?" name="message"></textarea>
                            <button type="submit" onclick="alert("The timings provided may vary upto 1 hour!");">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Appoinment Section End -->

    <!-- featured topics Begin -->
    <section class="upcoming-classes spad">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <img src="img/icon.png" alt="Sahaayak" width="58" height="38">
                            <h2 data-step="8" data-intro="Featured Topics" data-position="bottom">Featured Topics</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $featurednews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="classes__item">
                                <?php if(is_null($news->image)): ?>
                                <div class="classes__item__pic set-bg" data-setbg="<?php echo e(asset('/img/news/default.jpg')); ?>">
                                    <img src="<?php echo e(asset('/img/news/default.jpg')); ?> alt="">
                                <?php else: ?>
                                <div class="classes__item__pic set-bg" data-setbg="<?php echo e(asset('/img/news/'.$news->image)); ?>">
                                    <img src="<?php echo e(asset('/img/news/'.$news->image)); ?>" alt="">
                                <?php endif; ?>
                                    <span><?php echo e(Carbon\Carbon::parse($news->created_at)->format('d-M-Y')); ?></span>
                                </div>
                                <div class="classes__item__text">
                                    <p><?php echo e($news->source); ?> </p>
                                    <h4><?php echo e($news->headline); ?></h4>
                                    <h6><?php echo e($news->content); ?></span></h6>
                                    <a href="<?php echo e($news->link); ?>" class="class-btn">Know More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
    </section>

    <!-- Classes Section End -->

    <!-- About Section Begin -->
    <section class="home-about spad">
        <div class="section-title">
                <img src="img/icon.png" alt="Sahaayak" width="58" height="38">
                <h2>About Us</h2>
            </div>
        <div class="container" data-step="9" data-intro="Introduction to Sahaayak" data-position="bottom-middle-aligned">
            
            <div class="row">
                <div class="col-lg-7">
                    <div class="home__about__pic">
                        <div class="home__about__pic__item large-item set-bg">
                            <img src="img/about/about-1.jpg" alt="">
                        </div>
                        <div class="home__about__pic__item">
                            <div class="home__about__pic__item__inner set-bg" data-setbg="img/about/about-2.jpg">
                                <img src="img/about/about-2.jpg" alt="">
                            </div>
                            <div class="home__about__pic__item__inner set-bg" data-setbg="img/about/about-3.jpg">
                                <img src="img/about/about-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home__about__text">
                        <span>“We Share coz We Care”</span>
                        <p>We are offering internationally certified 200 Hour Yoga Teacher Training in Rishikesh and 300
                            hour yoga teacher training in Rishikesh, India - Join us to have such life-transforming
                            experience in The world capital of Yoga in Rishikesh.</p>
                        <p class="para-2">Zogin is a great place for those who are in search of the ancient practice and
                            true essence of yoga, meditation, health, peace and learning the art of creating a class to
                            teach safely. We are passionate about adjustments and mainly focus on the alignment of the
                            asanas.</p>
                        <a href="<?php echo e(url('about')); ?>" class="primary-btn">MORE ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container" data-step="10" data-intro="Testimonials" data-position="bottom-middle-aligned">
            <div class="testimonial__slider owl-carousel">
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>Testimonal about our website which includes user experience of our website,thoughts and reviews about our website.</p>
                                <img src="img/testimonial/testimonial-1.png" alt="">
                                <h5>person name<span>- profession</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>Testimonal about our website which includes user experience of our website,thoughts and reviews about our website.</p>
                                <img src="img/testimonial/testimonial-1.png" alt="">
                                <h5>person name<span>- profession</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>Testimonal about our website which includes user experience of our website,thoughts and reviews about our website.</p>
                                <img src="img/testimonial/testimonial-1.png" alt="">
                                <h5>person name<span>- profession</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>Testimonal about our website which includes user experience of our website,thoughts and reviews about our website.</p>
                                <img src="img/testimonial/testimonial-1.png" alt="">
                                <h5>person name<span>- profession</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/welcome.blade.php ENDPATH**/ ?>