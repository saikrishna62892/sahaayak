<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sahaayak</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link href="css/introjs.css" rel="stylesheet">
    <link href="css/introjs-modern.css" rel="stylesheet">
    


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</head>

<body>
    <!-- Page Preloder -->
    <!--<div id="preloder">
        <div class="loader"></div>
    </div>-->

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu">
        <div class="offcanvas__logo">
            <a href="<?php echo e(url('/')); ?>"><img src="img/logo.png" alt="Sahaayak" width="240" height="60"></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <ul>
                <li>CALL US: + 1 800-567-8990</li>
                <li>WRITE US: OFFICE@EXAMPLE.COM</li>
            </ul>
                                <?php if(auth()->guard()->guest()): ?>
                                <a href="<?php echo e(route('login')); ?>" class="primary-btn">Login</a>
                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>" class="primary-btn">Join us</a>
                                <?php endif; ?>
                                <?php else: ?>
                                <li class="dropdown">
                                    <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-expanded="false" v-pre>
                                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                    </a>

                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
                                            <?php echo csrf_field(); ?>
                                        </form>
                                </li>
                                <?php endif; ?>
        </div>
        
        <nav class="header__menu">
            <ul class="mobile-menu">
                <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li><a href="<?php echo e(url('about')); ?>">About</a></li>
                                <li><a href="#">Learn</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('learn_depression')); ?>">Depression</a></li>
                                        <li><a href="<?php echo e(url('learn_suicide')); ?>">Suicide</a></li>
                                        <li><a href="<?php echo e(url('learn_stress')); ?>">Stress</a></li>
                                        <li><a href="<?php echo e(url('learn_stigma')); ?>">Stigma</a></li>
                                        <li><a href="<?php echo e(url('learn_healthy_sleep')); ?>">Healthy Sleep</a></li>
                                        <li><a href="<?php echo e(url('learn_mental_illness')); ?>">Mental Illness</a></li>
                                        <li><a href="<?php echo e(url('learn_hopelessness')); ?>">Hopelessness</a></li>
                                        <li><a href="<?php echo e(url('learn_fear_of_loss')); ?>">Fear of Loss</a></li>
                                        <li><a href="<?php echo e(url('learn_social_isolation')); ?>">Social Isolation</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Assessment</a>
                                    <ul class="dropdown">
                                        <li><a href="./classes-details.html">Depression test</a></li>
                                        <li><a href="./pricing.html">Sleep hygiene test</a></li>
                                        <li><a href="./pricing.html">Happiness test</a></li>
                                        <li><a href="./pricing.html">Mental health test</a></li>
                                        <li><a href="./pricing.html">Anxiety test</a></li>
                                        <li><a href="./blog-details.html">Self esteem test</a></li>
                                        <li><a href="./pricing.html">Mental speed test</a></li>
                                        <li><a href="./pricing.html">Concentration test</a></li>
                                        <li><a href="./pricing.html">Emotional intelligence test</a></li>
                                        <li><a href="./blog-details.html">Social skills test</a></li>
                                        <li><a href="./pricing.html">Stress test</a></li>
                                        <li><a href="./pricing.html">Self disclosure test</a></li>
                                        <li><a href="./pricing.html">Healthy lifestyle test</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(url('/#talk_to_us')); ?>">Talk to Us</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('shared_stories')); ?>">Discover Stories</a></li>
                                        <li><a href="<?php echo e(url('talks')); ?>">Expert Talks</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(url('news')); ?>">News</a></li>
                                <li><a href="#">Hope Box</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('inspire_me')); ?>">Inspire Me</a></li>
                                        <li><a href="<?php echo e(url('videos')); ?>">Videos</a></li>
                                        <li><a href="<?php echo e(url('playlists')); ?>">Playlists</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(url('team')); ?>">Team</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('team#family')); ?>">Family</a></li>
                                        <li><a href="<?php echo e(url('team#volunteers')); ?>">Volunteers</a></li>
                                        <li><a href="<?php echo e(url('team#therapists')); ?>">Therapists</a></li>
                                    </ul>
                                </li>
            </ul>
        </nav>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>&emsp;
            <a href="#"><i class="fa fa-twitter"></i></a>&emsp;
            <a href="#"><i class="fa fa-instagram"></i></a>&emsp;
            <a href="#"><i class="fa fa-linkedin"></i></a>&emsp;
        </div>
    </div>
    <!-- Offcanvas Menu End -->
    
    <!-- Header Section Begin -->
    
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="header__logo">
                            <a href="<?php echo e(url('/')); ?>"><img data-step="1" data-intro="logo" data-position="right" src="img/logo.png" alt="Sahaayak" width="240" height="60"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="header__top__widget">
                            <ul>
                                <li>CALL US: + 1 800-567-8990</li>
                                <li>WRITE US: OFFICE@EXAMPLE.COM</li>
                            </ul>
                            <?php if(auth()->guard()->guest()): ?>
                                <a href="<?php echo e(route('login')); ?>" class="primary-btn">Login</a>
                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>" class="primary-btn">Join us</a>
                                <?php endif; ?>
                                <?php else: ?>
                                <li class="dropdown">
                                    <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-expanded="false" v-pre>
                                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                    </a>

                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
                                            <?php echo csrf_field(); ?>
                                        </form>
                                </li>
                                <?php endif; ?>
                        </div>
                    </div>

                </div>
                <div class="canvas__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>

        <div class="header__nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-9">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li><a href="<?php echo e(url('about')); ?>">About</a></li>
                                <li><a href="#">Learn</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('learn_depression')); ?>">Depression</a></li>
                                        <li><a href="<?php echo e(url('learn_suicide')); ?>">Suicide</a></li>
                                        <li><a href="<?php echo e(url('learn_stress')); ?>">Stress</a></li>
                                        <li><a href="<?php echo e(url('learn_stigma')); ?>">Stigma</a></li>
                                        <li><a href="<?php echo e(url('learn_healthy_sleep')); ?>">Healthy Sleep</a></li>
                                        <li><a href="<?php echo e(url('learn_mental_illness')); ?>">Mental Illness</a></li>
                                        <li><a href="<?php echo e(url('learn_hopelessness')); ?>">Hopelessness</a></li>
                                        <li><a href="<?php echo e(url('learn_fear_of_loss')); ?>">Fear of Loss</a></li>
                                        <li><a href="<?php echo e(url('learn_social_isolation')); ?>">Social Isolation</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Assessment</a>
                                    <ul class="dropdown">
                                    <?php $__currentLoopData = $questionnaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionnaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions"><?php echo e($questionnaire->questionnaireTitle); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <!--
                                    <li><a href="/home/questionnaires/2/questions">Sleep hygiene test</a></li>
                                    <li><a href="/home/questionnaires/3/questions">Happiness test</a></li>
                                    <li><a href="/home/questionnaires/4/questions">Mental health test</a></li>
                                    <li><a href="/home/questionnaires/5/questions">Anxiety test</a></li>
                                    <li><a href="/home/questionnaires/6/questions">Self esteem test</a></li>
                                    <li><a href="/home/questionnaires/7/questions">Mental speed test</a></li>
                                    <li><a href="/home/questionnaires/8/questions">Concentration test</a></li>
                            <li><a href="/home/questionnaires/9/questions">Emotional intelligence test</a></li>
                                    <li><a href="/home/questionnaires/10/questions">Social skills test</a></li>
                                    <li><a href="/home/questionnaires/11/questions">Stress test</a></li>
                                <li><a href="/home/questionnaires/12/questions">Self disclosure test</a></li>
                                <li><a href="/home/questionnaires/13/questions">Healthy lifestyle test</a></li>
                            -->
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(url('/#talk_to_us')); ?>">Talk to Us</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('shared_stories')); ?>">Discover Stories</a></li>
                                        <li><a href="<?php echo e(url('talks')); ?>">Expert Talks</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(url('news')); ?>">News</a></li>
                                <li><a href="#">Hope Box</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('inspire_me')); ?>">Inspire Me</a></li>
                                        <li><a href="<?php echo e(url('videos')); ?>">Videos</a></li>
                                        <li><a href="<?php echo e(url('playlists')); ?>">Playlists</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(url('team')); ?>">Team</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('team#family')); ?>">Family</a></li>
                                        <li><a href="<?php echo e(url('team#volunteers')); ?>">Volunteers</a></li>
                                        <li><a href="<?php echo e(url('team#therapists')); ?>">Therapists</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->



    <?php echo $__env->yieldContent('content'); ?>;



    <!-- Footer Section Begin -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <img src="img/footer-logo.png" alt="Sahaayak" width="240" height="60">
                        <ul class="footer-address">
                            <li><i class="fa fa-phone"></i> (01) 436 8888</li>
                            <li><i class="fa fa-envelope"></i> hello@zogin.com</li>
                            <li><i class="fa fa-location-arrow"></i> 828 Granville Lights Suite 466</li>
                        </ul>
                        <h5 style="color:white;">Subscribe</h5><br>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Your Email" name="email">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Helplines</h5>
                        <ul>
                            <li><a href="#">Helpline 1</a></li>
                            <li><a href="#">Helpline 2</a></li>
                            <li><a href="#">Helpline 3</a></li>
                            <li><a href="#">Helpline 4</a></li>
                            <li><a href="#">Helpline 5</a></li>
                            <li><a href="#">Helpline 6</a></li>
                            <li><a href="#">More</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Our Vision</a></li>
                            <li><a href="#">Statistics</a></li>
                            <li><a href="#">What we offer</a></li>
                            <li><a href="#">Impact</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h5>Connect Us</h5>
                        <div class="footer__copyright__social" align="left">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <br>
                        <h5>Write to Us</h5>
                        <!-- Leave Comment Begin -->
                        <div class="leave__comment__text">
                            <form action="/suggestion_controller" method="get">
                            <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="Name*" name="name">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="Email*" name="email">
                                    </div>
                                    <div class="col-lg-12 text-center">
                                    <input type="text" placeholder="Comment" name="comment">
                                        <button type="submit" class="site-btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        <div class="footer__widget">
                        <!-- Leave Comment End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/intro.js"></script>

    <!-- ManyChat Plugin -->
    <script src="//widget.manychat.com/101206188315883.js" async="async"></script>
    <!-- Smooth Scrolling -->
    <script>
            let anchorlinks = document.querySelectorAll('a[href^="#"]')
            for (let item of anchorlinks) { // relitere 
                item.addEventListener('click', (e)=> {
                    let hashval = item.getAttribute('href')
                    let target = document.querySelector(hashval)
                    target.scrollIntoView({
                        behavior: 'smooth'
                    })
                    history.pushState(null, null, hashval)
                    e.preventDefault()
                })
            }
    </script>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
        attribution=setup_tool
        page_id="100529798384686"
        theme_color="#5768ad"
        logged_in_greeting="Hi buddy we are there to talk with you?"
        logged_out_greeting="Hi buddy we are there to talk with you?">
    </div>

</body>

</html><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/layouts/layout.blade.php ENDPATH**/ ?>