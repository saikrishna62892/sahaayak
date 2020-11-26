<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sahaayak | Dashboard | <?php echo $__env->yieldContent('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="/img/icon-white.png">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/metisMenu.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="/css/typography.css">
    <link rel="stylesheet" href="/css/default-css.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171070217-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-171070217-1');
    </script>
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<!--reportForm script begin-->
<script type="text/javascript">
    function reply_click(clicked_id)
    {
        var res = clicked_id.split("#");
        document.getElementById("demo").innerHTML = "Add Case history for "+res[1];
        document.getElementById('college_id').value = res[0];
        document.getElementById('appointment_name').value = res[1];
        document.getElementById('appointment_email').value = res[2];
        document.getElementById('appointment_id').value = res[3];
    }
</script>
<!--reportForm script end-->

<script type="text/javascript">
    function getUserID()
    {
        var id=document.getElementById("userID");
        var link="/volunteer/appointment/"+id+"/getCaseHistory";
        return link;
    }
</script>
<body style="background-color: #f5f6fa;">
    <!-- preloader area start 
    <div id="preloader">
        <div class="loader"></div>
    </div>
     preloader area end -->

    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="<?php echo e(url('/')); ?>"><img src="/img/logo-dashboard.png" alt="logo" width="225" height="35"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <?php if(auth()->user()->is_Volunteer == 1): ?>
                                    <a href="/home" aria-expanded="false"><i class="ti-settings"></i><span>Dashboard</span></a>
                                <?php elseif(auth()->user()->is_admin == 1): ?>
                                    <a href="/admin/home" aria-expanded="false"><i class="ti-settings"></i><span>Dashboard</span></a>
                                <?php elseif(auth()->user()->is_Counsellor == 1): ?>
                                    <a href="/counsellor/home" aria-expanded="false"><i class="ti-settings"></i><span>Dashboard</span></a>
                                <?php else: ?>
                                    <a href="/home" aria-expanded="false"><i class="ti-settings"></i><span>Dashboard</span></a>
                                <?php endif; ?>                                
                            </li>
                            <li>
                                <a href="<?php echo e(url('about')); ?>" aria-expanded="true"><i class="ti-dashboard"></i><span>About</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Learn</span></a>
                                <ul class="collapse">
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
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers"></i><span>Assessment</span></a>
                                <ul class="collapse">
                                    <?php $__currentLoopData = $questionnaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionnaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="/home/questionnaires/<?php echo e($questionnaire->id); ?>/questions"><?php echo e($questionnaire->questionnaireTitle); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/#talk_to_us')); ?>" aria-expanded="true"><i class="ti-microphone"></i><span>Talk to Us</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-server"></i><span>Blog</span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo e(url('displayStories')); ?>">Discover Stories</a></li>
                                    <li><a href="<?php echo e(url('displayTalks')); ?>">Expert Talks</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo e(url('displayNews')); ?>" aria-expanded="true"><i class="ti-world"></i><span>News</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-heart"></i><span>Hope Box</span></a>
                                <ul class="collapse">
                                        <li><a href="<?php echo e(url('weavesilk')); ?>">Interactive Drawing</a></li>
                                        <li><a href="<?php echo e(url('inspire_me')); ?>">Inspire Me</a></li>
                                        <li><a href="<?php echo e(url('videos')); ?>">Videos</a></li>
                                        <li><a href="<?php echo e(url('playlists')); ?>">Playlists</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-light-bulb"></i><span>Our Team</span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo e(url('team#counsellors')); ?>">Counsellors</a></li>
                                        <li><a href="<?php echo e(url('team#sgc')); ?>">SGC</a></li>
                                        <li><a href="<?php echo e(url('team#team')); ?>">Team</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->


        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-6 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="/">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Bell icon starts -->
                    <div class="col-md-6 col-sm-6 clearfix">
                        <ul class="notification-area pull-right">
                                <li class="dropdown">
                                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                        <?php if(auth::user()->unreadnotifications->count()): ?>
                                    <span class="badge badge-light"><?php echo e(auth::user()->unreadnotifications->count()); ?></span>
                                    <?php endif; ?>
                                    </i>
                                    <div class="dropdown-menu bell-notify-box notify-box">
                                        <span class="notify-title">You have <?php echo e(auth::user()->unreadnotifications->count()); ?> new notifications</span>

                                        <a style="color: red" class="dropdown-item" href="<?php echo e(route('markRead')); ?>">Mark all as read</a>

                                        <div class="nofity-list">
                                             <?php $__currentLoopData = auth()->user()->unreadnotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(route($notification->data['refrence'])); ?>" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p><?php echo e($notification->data['data']); ?></p>
                                                    </div>
                                            </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <?php $__currentLoopData = auth()->user()->readnotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(route($notification->data['refrence'])); ?>" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p><?php echo e($notification->data['data']); ?></p>
                                                    </div>
                                            </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </li>
<!-- bell icon code ends -->


                                <li>
                                    <h4 style="color: #5768ad;" class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo e(Auth::user()->name); ?> <i class="fa fa-angle-down"></i></h4>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
                                            <?php echo csrf_field(); ?>
                                        </form>
                                        <?php if( Auth::user()->is_admin==0 && Auth::user()->is_Volunteer==0 && Auth::user()->is_Counsellor==0): ?>
                                        <a class="dropdown-item" href="/user/edit/<?php echo e(Auth::user()->id); ?>">Edit Details </a>
                                        <?php endif; ?>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://www.nitc.ac.in/" target="_blank"><img src="/img/nitc.png"></a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
            <!-- header area end -->


            <?php echo $__env->yieldContent('content'); ?>

        </div>


    <!-- jquery latest version -->
    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/metisMenu.min.js"></script>
    <script src="/js/jquery.slimscroll.min.js"></script>
    <script src="/js/jquery.slicknav.min.js"></script>
    
    <script src="/js/plugins.js"></script>
    <script src="/js/scripts.js"></script>

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

</body>

</html>
<?php /**PATH D:\Sahaayak\sahaayak\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>