@extends('layouts.layout')

@section('name')
    Team
@endsection

    @section('content')

    

    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="img/breadcrumb1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Meet Our Team</h2>
                        <div class="breadcrumb__widget">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Team</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Team Section Begin -->
    <section class="team spad" id="counsellors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img src="img/icon.png" alt="Sahaayak" width="58" height="38">
                        <h2>Meet Our Counsellors</h2>
                        <p>Details</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team__slider owl-carousel">
                    @foreach($counsellors as $counsellor)
                        <div class="col-lg-6">
                            <div class="team__item">
                                <div class="team__item__pic">
                                    <img src="{{\Storage::disk('s3')->url($counsellor->file1)}}" alt="" width="320" height="323">
                                </div>
                                <div class="team__item__text">
                                    <div class="team__item__title">
                                        <h4>{{ $counsellor->name }}</h4>
                                        <span>{{ $counsellor->profession }} </span>
                                    </div>
                                    <p>{{ $counsellor->bio }}<br>
                                        Email: {{ $counsellor->email }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Team Section Begin -->
    <section class="team spad" id="sgc">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img src="img/icon.png" alt="Sahaayak" width="58" height="38">
                        <h2>Meet Our Sudent Guidance Cell</h2>
                        <p>Details</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team__slider owl-carousel">
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__pic">
                                <img src="img/team/kumar.png" alt="">
                            </div>
                            <div class="team__item__text">
                                <div class="team__item__title">
                                    <h4>Dr. S. D. Madhu Kumar</h4>
                                    <span>Dean and Professor of CSED</span>
                                </div>
                                <div class="team__item__social">
                                    <a href="mailto:madhu@nitc.ac.in" target="_blank"><i class="fa fa-google"></i></a>
                                    <a href="0495 2286806" target="_blank"><i class="fa fa-phone"></i></a>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__pic">
                                <img src="img/team/das.png" alt="">
                            </div>
                            <div class="team__item__text">
                                <div class="team__item__title">
                                    <h4>Ms. Lyla B Das</h4>
                                    <span>Associate Professor, ECED</span>
                                </div>
                                <div class="team__item__social">
                                    <a href="mailto:lbd@nitc.ac.in" target="_blank"><i class="fa fa-google"></i></a>
                                    <a href="9447415558" target="_blank"><i class="fa fa-phone"></i></a>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__pic">
                                <img src="img/team/anu_mary.png" alt="">
                            </div>
                            <div class="team__item__text">
                                <div class="team__item__title">
                                    <h4>Dr. Anu Mary Chacko</h4>
                                    <span>Associate Professor, CSED</span>
                                </div>
                                <div class="team__item__social">
                                    <a href="mailto:anu.chacko@nitc.ac.in" target="_blank"><i class="fa fa-google"></i></a>
                                    <a href="9496135685" target="_blank"><i class="fa fa-phone"></i></a>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Team Section Begin -->
    <section class="team spad" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img src="img/icon.png" alt="Sahaayak" width="58" height="38">
                        <h2>Meet Our Team</h2>
                        <p>We are with you with passion to provide the best for you</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team__slider owl-carousel">
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__pic">
                                <img src="/img/team/sai.png" alt="">
                            </div>
                            <div class="team__item__text">
                                <div class="team__item__title">
                                    <h4>Sai Krishna Gudipati</h4>
                                    <span>M.Tech at NIT Calicut</span>
                                </div>
                                <p>A Passionate Computer programmer <br>who loves to solve new challenges.</p>
                                <div class="team__item__social">
                                    <a href="https://www.linkedin.com/in/saikrishna62892/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="mailto:saikrishna62892@gmail.com" target="_blank"><i class="fa fa-google"></i></a>
                                    <a href="https://www.instagram.com/saikrishna62892/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/saikrishna62892" target="
                                    _blank"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__pic">
                                <img src="/img/team/dileep.png" alt="">
                            </div>
                            <div class="team__item__text">
                                <div class="team__item__title">
                                    <h4>Dileep Kumar Nandi</h4>
                                    <span>M.Tech at NIT Calicut</span>
                                </div>
                                <p>Pursuing M.Tech at NIT Calicut<br> Wants to become SDE.</p>
                                <div class="team__item__social">
                                    <a href="https://www.linkedin.com/in/dileep-kumar-128735108/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="mailto:dileepkumar.nandi9441@gmail.com" target="_blank"><i class="fa fa-google"></i></a>
                                    <a href="https://www.instagram.com/dileepkumarnandi/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=100004780184464" target="
                                    _blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/dileepkumar9441" target="
                                    _blank"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__pic">
                                <img src="/img/team/venkat.png" alt="">
                            </div>
                            <div class="team__item__text">
                                <div class="team__item__title">
                                    <h4>Venkat Govardhan Dasari</h4>
                                    <span>M.Tech at NIT Calicut</span>
                                </div>
                                <p>I am neither clever nor gifted, just <br> a curious person who loves to learn.</p>
                                <div class="team__item__social">
                                    <a href="https://www.linkedin.com/in/venkat-govardhan-dasari-a62586134" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="mailto:ven1997kat@gmail.com" target="_blank"><i class="fa fa-google"></i></a>
                                    <a href="https://www.instagram.com/govardhan.venkat/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/venkatgovardhan15" target="
                                    _blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/dileepkumar9441" target="
                                    _blank"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__pic">
                                <img src="/img/team/john.png" alt="">
                            </div>
                            <div class="team__item__text">
                                <div class="team__item__title">
                                    <h4>John Benyen Munga</h4>
                                    <span>M.Tech at NIT Calicut</span>
                                </div>
                                <p>A Hard-working Team guy <br> Aspiring to become SDE.</p>
                                <div class="team__item__social">
                                    <a href="https://www.linkedin.com/in/john-benyen/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="mailto:johnbenyen162@gmail.com" target="_blank"><i class="fa fa-google"></i></a>
                                    <a href="https://www.instagram.com/johnbenyen/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/john.benyen/" target="
                                    _blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/JohnBenyen/" target="
                                    _blank"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__pic">
                                <img src="/img/team/ganesh.png" alt="">
                            </div>
                            <div class="team__item__text">
                                <div class="team__item__title">
                                    <h4>Ganesh Chandra Sekhar</h4>
                                    <span>M.Tech at NIT Calicut</span>
                                </div>
                                <p>I am a M.Tech Student <br>Wanted to work on new Tech.</p>
                                <div class="team__item__social">
                                    <a href="https://www.linkedin.com/in/ganesh-n-43b558120/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="mailto:ganeshchandu1996@gmail.com" target="_blank"><i class="fa fa-google"></i></a>
                                    <a href="https://www.instagram.com/chandu_naram/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=100006110857712" target="
                                    _blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/chandu_1996" target="
                                    _blank"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__pic">
                                <img src="/img/team/spandana.png" alt="">
                            </div>
                            <div class="team__item__text">
                                <div class="team__item__title">
                                    <h4>Spandana Priya </h4>
                                    <span>Web Developer</span>
                                </div>
                                <p>Passionate Content Writer<br>Works in Conquerors Hyderabad.</p>
                                <div class="team__item__social">
                                    <a href="https://www.linkedin.com/in/spandana-priya-312225191" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="david.martha1996@gmail.com" target="_blank"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__pic">
                                <img src="/img/team/aswathi.png" alt="">
                            </div>
                            <div class="team__item__text">
                                <div class="team__item__title">
                                    <h4>Aswathi Mohan</h4>
                                    <span>Project co-ordinator</span>
                                </div>
                                <p>Working as project coordinator <br> in NIT Calicut.</p>
                                <div class="team__item__social">
                                    <a href="tel:9497307550" target="_blank"><i class="fa fa-phone"></i></a>
                                    <a href="aswathipranavam@gmail.com<" target="_blank"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <span class="icon_phone"></span>
                        <h4>Call to</h4>
                        <a href="tel:0495-228-6180" style="color:black;">0495-228-6180</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <span class="icon_mail_alt"></span>
                        <h4>Mail to</h4>
                        <a href="mailto:sgc@nitc.ac.in" style="color:black;">Mail Handle</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <span class="social_facebook"></span>
                        <h4>Like at</h4>
                        <a href="https://www.facebook.com/NIT.Calicut.Kerala" target="_blank" style="color:black;">Facebook Handle</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <span class="social_instagram"></span>
                        <h4>DM at</h4>
                        <a href="https://www.instagram.com/nitcofficial/?hl=en" target="_blank" style="color:black;">Instagram Handle</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.1795380609474!2d75.93144721412067!3d11.321584351991628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba642fd50000001%3A0xbe8a77db953bda6c!2sNIT%20Calicut!5e0!3m2!1sen!2sin!4v1592966112770!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
        </div>
    </div>
    <!-- Map End -->
    @endsection