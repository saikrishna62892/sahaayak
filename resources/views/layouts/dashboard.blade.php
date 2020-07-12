<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sahaayak | Dashboard | @yield('name')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="/img/icon/favicon.ico">
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
        document.getElementById("demo").innerHTML = "Make Report for "+res[1];
        document.getElementById('appointment_id').value = res[0];
        document.getElementById('appointment_name').value = res[1];
        document.getElementById('appointment_email').value = res[2];
    }
</script>
<!--reportForm script end-->

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="/img/logo-dashboard.png" alt="logo" width="225" height="35"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                @if(auth()->user()->is_Volunteer == 1)
                                    <a href="/home" aria-expanded="false"><i class="ti-settings"></i><span>Dashboard</span></a>
                                @elseif(auth()->user()->is_admin == 1)
                                    <a href="/admin/home" aria-expanded="false"><i class="ti-settings"></i><span>Dashboard</span></a>
                                @else
                                    <a href="/home" aria-expanded="false"><i class="ti-settings"></i><span>Dashboard</span></a>
                                @endif                                
                            </li>
                            <li>
                                <a href="{{ url('about') }}" aria-expanded="true"><i class="ti-dashboard"></i><span>About</span></a>
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
                                    <li><a href="index.html">Depression</a></li>
                                    <li><a href="index3-horizontalmenu.html">Suicide</a></li>
                                    <li><a href="index.html">Depression</a></li>
                                    <li><a href="index3-horizontalmenu.html">Suicide</a></li>
                                    <li><a href="index.html">Depression</a></li>
                                    <li><a href="index3-horizontalmenu.html">Suicide</a></li>
                                    <li><a href="index.html">Depression</a></li>
                                    <li><a href="index3-horizontalmenu.html">Suicide</a></li>
                                    <li><a href="index.html">Depression</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('/#talk_to_us') }}" aria-expanded="true"><i class="ti-microphone"></i><span>Talk to Us</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-server"></i><span>Blog</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ url('displayStories') }}">Discover Stories</a></li>
                                    <li><a href="{{ url('displayTalks') }}">Expert Talks</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('news') }}" aria-expanded="true"><i class="ti-world"></i><span>News</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-heart"></i><span>Hope Box</span></a>
                                <ul class="collapse">
                                        <li><a href="{{ url('weavesilk') }}">Interactive Drawing</a></li>
                                        <li><a href="{{ url('inspire_me') }}">Inspire Me</a></li>
                                        <li><a href="{{ url('videos') }}">Videos</a></li>
                                        <li><a href="{{ url('playlists') }}">Playlists</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-light-bulb"></i><span>Our Team</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ url('team#volunteers') }}">Volunteers</a></li>
                                        <li><a href="{{ url('team#therapists') }}">Therapists</a></li>
                                        <li><a href="{{ url('team#family') }}">Family</a></li>
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
                                        @if(auth::user()->unreadnotifications->count())
                                    <span class="badge badge-light">{{auth::user()->unreadnotifications->count()}}</span>
                                    @endif
                                    </i>
                                    <div class="dropdown-menu bell-notify-box notify-box">
                                        <span class="notify-title">You have {{auth::user()->unreadnotifications->count()}} new notifications</span>

                                        <a style="color: red" class="dropdown-item" href="{{route('markRead')}}">Mark all as read</a>

                                        <div class="nofity-list">
                                             @foreach (auth()->user()->unreadnotifications as $notification)
                                            <a href="{{route($notification->data['refrence'])}}" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>{{$notification->data['data']}}</p>
                                                    </div>
                                            </a>
                                            @endforeach

                                            @foreach (auth()->user()->readnotifications as $notification)
                                            <a href="{{route($notification->data['refrence'])}}" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>{{$notification->data['data']}}</p>
                                                    </div>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
<!-- bell icon code ends -->


                                <li>
                                    <h4 style="color: #5768ad;" class="user-name dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></h4>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
            <!-- header area end -->


            @yield('content')

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
