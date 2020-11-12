<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sahaayak | @yield('name')</title>
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
            <a href="{{ url('/') }}"><img src="/img/logo.png" alt="Sahaayak" width="240" height="60"></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <ul>
                <li>WRITE US: <a href="mailto:sahaayakofficial@gmail.com" target="_blank" style="color: #5768ad;">sahaayakofficial@gmail.com</li>
            </ul>
            @guest
            <a href="{{ route('login') }}" class="primary-btn">Login</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="primary-btn">Join us</a>
            @endif
            @else
                    @if(auth()->user()->is_Volunteer == 1 )
                        @if(auth()->user()->step2_done == 0)
                        <a class="dropdown-item" href="/register/step2/{{auth()->user()->id}}" style="color: #5768ad;">Complete step2</a>
                        @elseif(auth()->user()->volunteer->is_Approved == 0)
                        <a class="dropdown-item" href="/volunteer/waitingApproval" style="color: #5768ad;">Return to Dashboard</a>
                        @else
                        <a class="dropdown-item" href="/volunteer/home" style="color: #5768ad;">Return to Dashboard</a>
                        @endif
                    @elseif(auth()->user()->is_admin == 1)
                    <a class="dropdown-item" href="/admin/home" style="color: #5768ad;">Return to Dashboard</a>
                    @else
                    <a class="dropdown-item" href="/user/home" style="color: #5768ad;">Return to Dashboard</a>
                    @endif
                    <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" style="color: #5768ad;">
                            {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                    </form>

            @endguest
        </div>
        
        <nav class="header__menu">
            <ul class="mobile-menu">
                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About</a></li>
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
                                    @foreach($questionnaires as $questionnaire)
                                        <li><a href="/home/questionnaires/{{$questionnaire->id}}/questions">{{$questionnaire->questionnaireTitle}}</a></li>
                                    @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ url('/#talk_to_us') }}">Talk to Us</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('displayStories') }}">Discover Stories</a></li>
                                        <li><a href="{{ url('displayTalks') }}">Expert Talks</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('displayNews') }}">News</a></li>
                                <li><a href="#">Hope Box</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('interactiveDrawing') }}">Interactive Drawing</a></li>
                                        <li><a href="{{ url('inspire_me') }}">Inspire Me</a></li>
                                        <li><a href="/videos">Videos</a></li>
                                        <li><a href="{{ url('playlists') }}">Playlists</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('team') }}">Team</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('team#volunteers') }}">Volunteers</a></li>
                                        <li><a href="{{ url('team#therapists') }}">Therapists</a></li>
                                        <li><a href="{{ url('team#family') }}">Family</a></li>
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
                            <a href="{{ url('/') }}"><img data-step="1" data-intro="Our Brand new logo and motto which describes how we care about you." data-position="right" src="/img/logo.png" alt="Sahaayak" width="240" height="60"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="header__top__widget">
                            @guest
                                <ul>
                                    <li>WRITE US: <a href="mailto:sahaayakofficial@gmail.com" target="_blank" style="color: #5768ad;">sahaayakofficial@gmail.com</a><br>
                                </ul>
                                <a href="{{ route('login') }}" class="primary-btn">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="primary-btn">Join us</a>
                                @endif
                                @else
                                <div class="dropdown">
                                  <button class="btn primary-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @if(auth()->user()->is_Volunteer == 1 )
                                        @if(auth()->user()->step2_done == 0)
                                        <a class="dropdown-item" href="/register/step2/{{auth()->user()->id}}">Complete step2</a>
                                        @elseif(auth()->user()->volunteer->is_Approved == 0)
                                        <a class="dropdown-item" href="/volunteer/waitingApproval">Return to Dashboard</a>
                                        @else
                                        <a class="dropdown-item" href="/volunteer/home">Return to Dashboard</a>
                                        @endif
                                    @elseif(auth()->user()->is_admin == 1)
                                    <a class="dropdown-item" href="/admin/home">Return to Dashboard</a>
                                    @else
                                    <a class="dropdown-item" href="/user/home">Return to Dashboard</a>
                                    @endif
                                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>
                                  </div>
                                </div>
                            @endguest
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
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About</a></li>
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
                                    @foreach($questionnaires as $questionnaire)
                                        <li><a href="/home/questionnaires/{{$questionnaire->id}}/questions">{{$questionnaire->questionnaireTitle}}</a></li>
                                    @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ url('/#talk_to_us') }}">Talk to Us</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('displayStories') }}">Discover Stories</a></li>
                                        <li><a href="{{ url('displayTalks') }}">Expert Talks</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('displayNews') }}">News</a></li>
                                <li><a href="#">Hope Box</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('interactiveDrawing') }}">Interactive Drawing</a></li>
                                        <li><a href="{{ url('inspire_me') }}">Inspire Me</a></li>
                                        <li><a href="/videos">Videos</a></li>
                                        <li><a href="{{ url('playlists') }}">Playlists</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('team') }}">Team</a>
                                    <ul class="dropdown">
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
        </div>
    </header>
    <!-- Header Section End -->



    @yield('content')

    <br>



    <!-- Footer Section Begin -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <img src="/img/footer-logo.png" alt="Sahaayak" width="240" height="60">
                        <ul class="footer-address">
                            <li><i class="fa fa-envelope"></i> sahaayakofficial@gmail.com</li>
                            <li><i class="fa fa-location-arrow"></i> NIT Calicut</li>
                        </ul>
                        <!--<h5 style="color:white;">Subscribe</h5>--><br>


                        <a href="/home/subscribe" class="btn primary-btn" data-step="9" data-intro="Here you can subscribe for the latest updates of Sahaayak." data-position="right" onclick="alert('Subscribed Succesfully')">Subscribe&nbsp;<i class="fa fa-send"></i></a>


                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6" data-step="10" data-intro="This section provides information about different helpline numbers across India." data-position="bottom-middle-aligned">
                    <div class="footer__widget">
                        <h5>Helplines</h5>
                        <ul>
                            <li><a href="tel:01140769002" target="_blank">Delhi : 011-4076 9002</a> </li>
                            <li><a href="tel: 7893078930" target="_blank">Andhra Pradesh : 78930-78930</a></li>
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
                            <li><a href="{{ url('about#mission')}}">Our Mission</a></li>
                            <li><a href="{{ url('about#vision')}}">Our Vision</a></li>
                            <li><a href="{{ url('about#stats')}}">Statistics</a></li>
                            <li><a href="{{ url('about#gallery')}}">Gallery</a></li>
                            <li><a href="{{ url('about#impact')}}">Impact</a></li>
                            <li><a href="{{ url('about#faq')}}">FAQ's</a></li>
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
                            @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="Name" name="name"  autocomplete="off" >
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="Email" name="email" autocomplete="off" >
                                    </div>
                                    <div class="col-lg-12 text-center">
                                    <input type="text" placeholder="Comment" name="comment" autocomplete="off" >
                                        <button type="submit" class="site-btn" onclick="alert('Your suggestion was recorded and we will act accordingly')">Submit</button>
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
    <script src="//widget.manychat.com/101206188315883.js" async="async"></script>
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

</html>