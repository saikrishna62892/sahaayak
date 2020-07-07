<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sahaayak | <?php echo $__env->yieldContent('name'); ?></title>
    <link rel="icon" type="image/png" href="/img/icon.png"/>
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
    <link href="/css/introjs.css" rel="stylesheet">
    <link href="/css/introjs-modern.css" rel="stylesheet">
    

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171070217-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-171070217-1');
    </script>

    <style>
* {
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

.left {
  width: 25%;
}

.right {
  width: 75%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu">
        <div class="offcanvas__logo">
            <a href="<?php echo e(url('/')); ?>"><img src="/img/logo.png" alt="Sahaayak" width="240" height="60"></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <ul>
                <li>WRITE US: <a href="mailto:sahaayakofficial@gmail.com" target="_blank" style="color: #5768ad;">sahaayakofficial@gmail.com</li>
            </ul>
            <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(route('login')); ?>" class="primary-btn">Login</a>
            <?php if(Route::has('register')): ?>
                <a href="<?php echo e(route('register')); ?>" class="primary-btn">Join us</a>
            <?php endif; ?>
            <?php else: ?>
            <div class="dropdown">
                <button class="btn primary-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?></button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php if(auth()->user()->is_Volunteer == 1): ?>
                    <!--<a class="dropdown-item" href="#">Return to Dashboard</a>-->
                    <?php endif; ?>
                    <a class="dropdown-item" href="#">Messages</a>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                    </a>
                </div>
            </div>
            <?php endif; ?>
        </div>
        
        <nav class="header__menu">
            <ul class="mobile-menu">
                <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li><a href="<?php echo e(url('about')); ?>">About</a></li>
                                <li><a href="#">Learn</a>
                                    <ul class="dropdown">
                                         <li><a href="/home/learn/depression/1">Depression</a></li>
                                        <li><a href="/home/learn/suicide/2">Suicide</a></li>
                                        <li><a href="/home/learn/stress/3">Stress</a></li>
                                        <li><a href="/home/learn/stigma/4">Stigma</a></li>
                                        <li><a href="/home/learn/healthy-sleep/5">Healthy Sleep</a></li>
                                        <li><a href="/home/learn/mental-illness/6">Mental Illness</a></li>
                                        <li><a href="/home/learn/hopelessness/7">Hopelessness</a></li>
                                        <li><a href="/home/learn/fear-of-loss/8">Fear of Loss</a></li>
                                        <li><a href="/home/learn/social-isolation/9">Social Isolation</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Assessment</a>
                                    <ul class="dropdown">
                                    <?php $__currentLoopData = $questionnaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionnaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions"><?php echo e($questionnaire->questionnaireTitle); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(url('/#talk_to_us')); ?>">Talk to Us</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('displayStories')); ?>">Discover Stories</a></li>
                                        <li><a href="<?php echo e(url('displayTalks')); ?>">Expert Talks</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(url('news')); ?>">News</a></li>
                                <li><a href="#">Hope Box</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('weavesilk')); ?>">Interactive Drawing</a></li>
                                        <li><a href="<?php echo e(url('inspire_me')); ?>">Inspire Me</a></li>
                                        <li><a href="<?php echo e(url('video.show')); ?>">Videos</a></li>
                                        <li><a href="<?php echo e(url('playlists')); ?>">Playlists</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(url('team')); ?>">Team</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('team#volunteers')); ?>">Volunteers</a></li>
                                        <li><a href="<?php echo e(url('team#therapists')); ?>">Therapists</a></li>
                                        <li><a href="<?php echo e(url('team#family')); ?>">Family</a></li>
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
                            <a href="<?php echo e(url('/')); ?>"><img data-step="1" data-intro="Our Brand new logo and motto which describes how we care about you." data-position="right" src="/img/logo.png" alt="Sahaayak" width="240" height="60"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="header__top__widget">
                            <?php if(auth()->guard()->guest()): ?>
                                <ul>
                                    <li>WRITE US: <a href="mailto:sahaayakofficial@gmail.com" target="_blank" style="color: #5768ad;">sahaayakofficial@gmail.com</li>
                                </ul>
                                <a href="<?php echo e(route('login')); ?>" class="primary-btn">Login</a>
                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>" class="primary-btn">Join us</a>
                                <?php endif; ?>
                                <?php else: ?>
                                <div class="dropdown">
                                  <button class="btn primary-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?></button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php if(auth()->user()->is_Volunteer == 1): ?>
                                    <a class="dropdown-item" href="/home">Return to Dashboard</a>
                                    <?php elseif(auth()->user()->is_admin == 1): ?>
                                    <a class="dropdown-item" href="admin/home">Return to Dashboard</a>
                                    <?php else: ?>
                                    <a class="dropdown-item" href="/home">Return to Dashboard</a>
                                    <?php endif; ?>
                                    <?php if(auth()->user()->is_Volunteer == 1): ?>
                                    <a class="dropdown-item" href="/home">Notifications</a>
                                    <?php elseif(auth()->user()->is_admin == 1): ?>
                                    <a class="dropdown-item" href="admin/home">Notifications</a>
                                    <?php else: ?>
                                    <a class="dropdown-item" href="/home">Notifications</a>
                                    <?php endif; ?>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
                                            <?php echo csrf_field(); ?>
                                        </form>
                                  </div>
                                </div>
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
                                        <li><a href="/home/learn/depression/1">Depression</a></li>
                                        <li><a href="/home/learn/suicide/2">Suicide</a></li>
                                        <li><a href="/home/learn/stress/3">Stress</a></li>
                                        <li><a href="/home/learn/stigma/4">Stigma</a></li>
                                        <li><a href="/home/learn/healthy-sleep/5">Healthy Sleep</a></li>
                                        <li><a href="/home/learn/mental-illness/6">Mental Illness</a></li>
                                        <li><a href="/home/learn/hopelessness/7">Hopelessness</a></li>
                                        <li><a href="/home/learn/fear-of-loss/8">Fear of Loss</a></li>
                                        <li><a href="/home/learn/social-isolation/9">Social Isolation</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Assessment</a>
                                    <ul class="dropdown">
                                    <?php $__currentLoopData = $questionnaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionnaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions"><?php echo e($questionnaire->questionnaireTitle); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(url('/#talk_to_us')); ?>">Talk to Us</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('displayStories')); ?>">Discover Stories</a></li>
                                        <li><a href="<?php echo e(url('displayTalks')); ?>">Expert Talks</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(route('displayNews')); ?>">News</a></li>
                                <li><a href="#">Hope Box</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('weavesilk')); ?>">Interactive Drawing</a></li>
                                        <li><a href="<?php echo e(url('worry')); ?>">worry</a></li>
                                        <li><a href="<?php echo e(url('inspire_me')); ?>">Inspire Me</a></li>
                                        <li><a href="/videos">Videos</a></li>
                                        <li><a href="<?php echo e(url('playlists')); ?>">Playlists</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(url('team')); ?>">Team</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('team#volunteers')); ?>">Volunteers</a></li>
                                        <li><a href="<?php echo e(url('team#therapists')); ?>">Therapists</a></li>
                                        <li><a href="<?php echo e(url('team#family')); ?>">Family</a></li>
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



    <?php echo $__env->yieldContent('content'); ?>

    <br>



    <!-- Footer Section Begin -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <img src="/img/footer-logo.png" alt="Sahaayak" width="240" height="60">
                        <ul class="footer-address">
                            <li><i class="fa fa-envelope"></i> sahaayakofficial@gmail.com</li>
                            <li><i class="fa fa-location-arrow"></i> NIT Calicut</li>
                        </ul>
                        <h5 style="color:white;">Subscribe</h5><br>
                        <form action="/home/subscribe" method="post" class="subscribe-form" data-step="9" data-intro="Here you can subscribe to get the latest updates from our site." data-position="right">
                            <?php echo csrf_field(); ?>
                            <input type="email" placeholder="Your Email" name="subscriberEmail">
                            <?php $__errorArgs = ['subscriberEmail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($messsage); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-3 col-sm-6" data-step="10" data-intro="This section provides information about different helpline numbers across India." data-position="bottom-middle-aligned">
                    <div class="footer__widget">
                        <h5>Helplines</h5>
                        <ul>
                            <li><a href="tel:01140769002" target="_blank">Delhi : 011-4076 9002</a> </li>
                            <li><a href="tel: 7893078930" target="_blank">Andhra : 78930-78930</a></li>
                            <li><a href="tel: 104" target="_blank">Karnataka : 104</a></li>
                            <li><a href="tel: 04712552056" target="_blank">Kerala : 0471-2552056</a></li>
                            <li><a href="tel: 04842361160" target="_blank">Kochi : 0484-2361160</a></li>
                            <li><a href="https://www.thehindu.com/news/national/suicide-prevention-helplines/article25612310.ece" target="_blank">More</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="<?php echo e(url('about#mission')); ?>">Our Mission</a></li>
                            <li><a href="<?php echo e(url('about#vision')); ?>">Our Vision</a></li>
                            <li><a href="<?php echo e(url('about#stats')); ?>">Statistics</a></li>
                            <li><a href="<?php echo e(url('about#impact')); ?>">Impact</a></li>
                            <li><a href="<?php echo e(url('about#gallery')); ?>">Gallery</a></li>
                            <li><a href="<?php echo e(url('about#faq')); ?>">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h5>Connect Us</h5>
                        <div class="footer__copyright__social" align="left" data-step="11" data-intro="Social Network handles for our website" data-position="left">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <br>
                        <h5 >Write to Us</h5>
                        <!-- Leave Comment Begin -->
                        <div class="leave__comment__text" data-step="12" data-intro="Here you can give us valuable information & suggestions for the development of community and website." data-position="bottom-middle-aligned">
                            <form action="/suggestion_controller" method="get">
                            <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="Name" name="name">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="Email" name="email">
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
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/jquery.barfiller.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>
    <script type="text/javascript" src="/js/intro.js"></script>
    <!-- jquery latest version -->
    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/metisMenu.min.js"></script>
    <script src="/js/jquery.slimscroll.min.js"></script>
    <script src="/js/jquery.slicknav.min.js"></script>

    <!-- ManyChat Plugin -->
    <!--<script src="//widget.manychat.com/101206188315883.js" async="async"></script>-->
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