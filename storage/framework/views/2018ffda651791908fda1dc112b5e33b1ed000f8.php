    

    <?php $__env->startSection('name'); ?>
        Home
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>

    <script>
        function truncateText(selector, maxLength) {
        var element = document.querySelector(selector),
            truncated = element.innerText;

        if (truncated.length > maxLength) {
            truncated = truncated.substr(0,maxLength) + '...';
        }
        return truncated;

        }
        document.querySelector('p').innerText = truncateText('p', 107);       
    </script>

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <span>We Share coz We Care</span>
                                <h2 style="color: #5768ad;"><?php echo e($dialyquote); ?></h2>
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
                        <h2 data-step="2" data-intro="This section deals with the statistics about Mental Health." data-position="bottom">Stats</h2>
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
                        <h2 data-step="3" data-intro="Myths & Facts" data-intro="This section deals with the Myths & Facts about Mental Health." data-position="left">Myths & Facts</h2>
                        <p align="justify">Talking about suicide provides the opportunity for communication. Fears shared are more
                         likely to diminish. The first step in encouraging a person with thoughts of suicide to live
                          comes from talking about those feelings. A simple inquiry about whether or not the person
                           is intending to end their life can start the conversation.</p><br>
                        <p align="justify">There is a very great chance that suicides can be reduced if treated in right way. In
                            most of the cases people don’t try to express what they are going through even with thier
                            beloved once.</p><br>
                        <p align="justify">This is because people believe that sharing their suicidal thoughts might disturb
                            their relation or think that they might be judged for having such thoughts.These insecurities are
                            caused due to the myths we believe blindly.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Services Section Begin -->
    <section class="services spad" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img src="img/icon.png" alt="Sahaayak" width="58" height="38">
                        <h2 data-step="4" data-intro="This Section describes the things that you can expect from us" data-position="bottom-middle-aligned">what we can do</h2>
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
                            <h5>You're not alone</h5>
                            <p>Talk to us i.e. make an appointment section which connects users
                             to socially disciplined volunteers.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-2.png" alt="">
                            <h5>Information is wealth</h5>
                            <p>Information,news,articles,stories & expert talks about their various experiences</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-3.png" alt="">
                            <h5>Personal issues services</h5>
                            <p>Skill training, Academic support, Mentorship program, Workshops and presentations to classes and groups</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-5.png" alt="">
                            <h5>Psycological services</h5>
                            <p>Confidential counselling, Stress management, Relaxation Training and Supportive Therapy</p>
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
            <div class="appointment__text" data-step="5" data-intro="In this form you can make an appointment and can have an interactive session with our socially disciplined volunteers" data-position="bottom-middle-aligned">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <img src="img/icon-white.png" alt="Sahaayak" width="58" height="38">
                            <h2>Make An Appointment</h2>
                            <small style="color: #fff;">Note: For avoiding reschedule of appointments please visit the calenders of Counsellors for a convenient timing</small><br>
                            <small style="color: #fff;"><u><a href="https://calendar.google.com/calendar/u/1?cid=c2Fpa3Jpc2huYV9tMTkwMjQxY3NAbml0Yy5hYy5pbg" target="_blank" style="color: #fff;">Visit Dr.Aneesh T Calendar</a></u>&emsp;<u><a href="#" style="color: #fff;">Visit Ms.Neethu NT Calendar</a></u></small>
                        </div>
                    </div>
                </div>
                <form action="/appointment_controller" method="post" class="appointment__form">
                <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Name" name="name" autocomplete="off" >
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="College ID" name="collegeid" autocomplete="off" >
                        </div>
                        <div class="col-lg-6">
                          <select  id="counsellor">
                            <option value="" selected disabled hidden>Choose Your Counsellor</option>
                            <option value="1"><a href="#">Dr.Aneesh T-Clinical Psychologist</a></option>
                            <option value="2"><a href="#">Ms.Neethu NT-Consultant Psychologist</a></option>
                          </select>
                        </div>
                        <div class="col-lg-3">
                          <input type="date" id="date" name="date" placeholder="Choose Your Date" autocomplete="off" >
                        </div>
                        <div class="col-lg-3">
                          <select  id="counsellor">
                            <option value="" selected disabled hidden>Choose Your Slot</option>
                            <option value="1">9AM - 10AM</option>
                            <option value="2">10AM - 11AM</option>
                            <option value="3">11AM - 12PM</option>
                            <option value="4">2PM - 3PM</option>
                            <option value="5">3PM - 4PM</option>
                            <option value="6">4PM - 5PM</option>
                            <option value="7">5PM - 6PM</option>
                          </select>
                        </div>
                        <div class="col-lg-12 text-center">
                            <textarea placeholder="What do you want to talk about in 100 words" name="message" autocomplete="off" ></textarea>
                        <button type="submit" onclick="alert('The timings provided may vary upto 1 hour!');">Submit</button>
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
                            <h2 data-step="6" data-intro="In this section you can expect the latest featured news gathered from different sources." data-position="bottom-middle-aligned">News & Announcements</h2>
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
                                    <p align="justify" style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 7;-webkit-box-orient: vertical;"><?php echo e($news->content); ?></p>
                                    <a href="<?php echo e($news->newsurl); ?>" class="class-btn" target="_blank">Know More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
            <center><a href="<?php echo e(url('displayNews')); ?>" class="primary-btn">View All News & Announcements</a></center>
    </section>

    <!-- Classes Section End -->

    <!-- About Section Begin -->
    <section class="home-about spad" style="padding-top: 0px;">
        <div class="section-title">
                <img src="img/icon.png" alt="Sahaayak" width="58" height="38">
                <h2>About Us</h2>
            </div>
        <div class="container">
            
            <div class="row">
                <div class="col-lg-7">
                    <div class="home__about__pic">
                        <div class="home__about__pic__item large-item set-bg">
                            <img src="img/about/about-1.jpg" alt="" width="345" height="620">
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
                <div class="col-lg-5" data-step="7" data-intro="This section is introduction to Sahaayak & have a look at it by clicking more about us button because we share & we care." data-position="bottom-middle-aligned">
                    <div class="home__about__text">
                        <span>“We Share coz We Care”</span>
                        <p align="justify">We understand your eagerness and enthusiasm to figure out the purpose of this site that is assuring you hope
                            and care in life. Have you ever wondered what it feels to have suicidal thoughts or what
                            encourages and convinces your guts to commit suicide if your answer is yes, we are pretty sure
                            that you are in the right hands. To all our fellow beings whose answer is a big yes, let us
                            undoubtedly tell you that suicide is not the one and only solution or chance, to end all the
                            problems and obstacles that come your way.</p>
                        <p class="para-2" align="justify">In fact, suicide is certainly a wrong choice, that
                            you might have chosen knowingly or unknowingly over other appropriate choices. As a part of
                            our mission and vision to make you understand, realize and believe strongly that committing
                            suicide is a false choice and not the ultimate decision to end things, let us help you in having a
                            clear picture about symptoms, causes, risks regarding suicides and finally providing you best
                            advice with no paybacks...</p>
                        <a href="<?php echo e(url('about')); ?>" class="primary-btn">MORE ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container" data-step="8" data-intro="This section describes the testimonies given by honourble personalities." data-position="bottom-middle-aligned">
            <div class="testimonial__slider owl-carousel">
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>Testimonial about our website which includes user experience of our website,thoughts and reviews about our website.</p>
                                <img src="img/testimonial/default.PNG" alt="">
                                <h5>person name<span>- profession</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>Testimonial about our website which includes user experience of our website,thoughts and reviews about our website.</p>
                                <img src="img/testimonial/default.PNG" alt="">
                                <h5>person name<span>- profession</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>Testimonial about our website which includes user experience of our website,thoughts and reviews about our website.</p>
                                <img src="img/testimonial/default.PNG" alt="">
                                <h5>person name<span>- profession</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>Testimonial about our website which includes user experience of our website,thoughts and reviews about our website.</p>
                                <img src="img/testimonial/default.PNG" alt="">
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\sahayak1\sahaayak\resources\views/welcome.blade.php ENDPATH**/ ?>