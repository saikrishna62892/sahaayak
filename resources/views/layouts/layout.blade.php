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


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


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
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <ul>
                <li>CALL US: + 1 800-567-8990</li>
                <li>WRITE US: OFFICE@EXAMPLE.COM</li>
            </ul>
            <a href="login.html" class="primary-btn">Login</a>
            <a href="joinus.html" class="primary-btn">Join us</a>
        </div>
        
        <nav class="header__menu">
            <ul class="mobile-menu">
                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="./about-us.html">About</a></li>
                                <li><a href="#">Learn</a>
                                    <ul class="dropdown">
                                        <li><a href="./classes-details.html">Topic1</a></li>
                                        <li><a href="./blog-details.html">Topic2</a></li>
                                        <li><a href="./pricing.html">Topic3</a></li>
                                        <li><a href="./faq.html">Topic4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Assesments</a>
                                    <ul class="dropdown">
                                        <li><a href="./classes-details.html">Topic1</a></li>
                                        <li><a href="./blog-details.html">Topic2</a></li>
                                        <li><a href="./pricing.html">Topic3</a></li>
                                        <li><a href="./faq.html">Topic4</a></li>
                                    </ul>
                                </li>
                                <li><a href="./classes.html">Talk to Us</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="./classes-details.html">Share Ur Story</a></li>
                                        <li><a href="./blog-details.html">Talks</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Media</a>
                                    <ul class="dropdown">
                                        <li><a href="./classes-details.html">Video</a></li>
                                        <li><a href="./blog-details.html">Audio</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Team</a>
                                    <ul class="dropdown">
                                        <li><a href="./classes-details.html">Our Volunteers</a></li>
                                        <li><a href="./blog-details.html">Our Therapists</a></li>
                                        <li><a href="./blog-details.html">Our Family</a></li>
                                    </ul>
                                </li>
            </ul>
        </nav>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
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
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="header__top__widget">
                            <ul>
                                <li>CALL US: + 1 800-567-8990</li>
                                <li>WRITE US: OFFICE@EXAMPLE.COM</li>
                            </ul>
                            <a href="{{ url('login') }}" class="primary-btn">Login</a>
                            <a href="{{ url('joinus') }}" class="primary-btn">Join Us</a>
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
                                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About</a></li>
                                <li><a href="#">Learn</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('learn_depression') }}">Depression</a></li>
                                        <li><a href="{{ url('learn_suicide') }}">Suicide</a></li>
                                        <li><a href="{{ url('learn_stress') }}">Stress</a></li>
                                        <li><a href="{{ url('learn_stigma') }}">Stigma</a></li>
                                        <li><a href="{{ url('learn_healthy_sleep') }}">Healthy Sleep</a></li>
                                        <li><a href="{{ url('learn_mental_illness') }}">Mental Illness</a></li>
                                        <li><a href="{{ url('learn_hopelessness') }}">Hopelessness</a></li>
                                        <li><a href="{{ url('learn_fear_of_loss') }}">Fear of Loss</a></li>
                                        <li><a href="{{ url('learn_social_isolation') }}">Social Isolation</a></li>
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
                                <li><a href="{{ url('/#talk_to_us') }}">Talk to Us</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('shared_stories') }}">Discover Stories</a></li>
                                        <li><a href="{{ url('talks') }}">Expert Talks</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('news') }}">News</a></li>
                                <li><a href="#">Hope Box</a>
                                    <ul class="dropdown">
                                        <li><a href="./classes-details.html">Inspire Me</a></li>
                                        <li><a href="./classes-details.html">Videos</a></li>
                                        <li><a href="./blog-details.html">Playlists</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('team') }}">Team</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('team#family') }}">Family</a></li>
                                        <li><a href="{{ url('team#volunteers') }}">Volunteers</a></li>
                                        <li><a href="{{ url('team#therapists') }}">Therapists</a></li>
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



    @yield('content');



    <!-- Footer Section Begin -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <img src="img/footer-logo.png" alt="">
                        <ul class="footer-address">
                            <li><i class="fa fa-phone"></i> (01) 436 8888</li>
                            <li><i class="fa fa-envelope"></i> hello@zogin.com</li>
                            <li><i class="fa fa-location-arrow"></i> 828 Granville Lights Suite 466</li>
                        </ul>
                        <h5 style="color:white;">Subscribe</h5><br>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Your Email">
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
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="Name*">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="Email*">
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <textarea placeholder="Your Comment"></textarea>
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

</html>