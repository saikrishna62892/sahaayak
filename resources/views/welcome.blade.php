    @extends('layouts.layout')

    @section('name')
        Home
    @endsection

    @section('content')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-datepicker.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
            <div class="hero__items set-bg" data-setbg="/img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <!-- flash messages section begin -->
                        <center>
                            <div class="flash-message" style="display: flex;justify-content: center;align-items: center;">
                              @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                    <center><p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p></center>
                                @endif
                              @endforeach
                            </div>
                        </center>
                        <!-- flash messages section end -->
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <span>We Share coz We Care</span>
                                @if(!is_null($dialyquote))
                                    <h2 style="color: #5768ad;">{{ $dialyquote }}</h2>
                                @else
                                    <h2 style="color: #5768ad;">All is Well!</h2>
                                @endif
                                <a style="color: white;" href="javascript:void(0);" onclick="javascript:introJs().setOption('showProgress',true).start();"><u><span>Take a Tour</span></u></a>
                                <a style="text-decoration: none" href="{{ url('about') }}" class="primary-btn">DISCOVER MORE</a>
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
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-1.png" alt="">
                            <h5>You're not alone</h5>
                            <p>Talk to us i.e. make an appointment section which connects users to socially disciplined counsellors.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-2.png" alt="">
                            <h5>Information is wealth</h5>
                            <p>Information,news,articles,stories & expert talks about their various experiences.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-3.png" alt="">
                            <h5>Personal issues services</h5>
                            <p>Skill training, Academic support, Mentorship program, Workshops and presentations to classes and groups.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-5.png" alt="">
                            <h5>Psycological services</h5>
                            <p>Confidential counselling, Stress management, Relaxation Training and Supportive Therapy.</p>
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
                            <small style="color: #fff;">
                                @foreach($counsellors as $counsellor)
                                    <u><a href="{{ $counsellor->calendar_url }}" target="_blank" style="color: #fff;">Visit {{ $counsellor->name }} Calendar</a></u>&emsp;
                                @endforeach
                            </small>
                        </div>
                    </div>
                </div>
                <form action="/appointment_controller" method="post" class="appointment__form">
                @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" placeholder="Name" name="name" autocomplete="off" required>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" placeholder="College ID" name="college_id" autocomplete="off" required>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" placeholder="Department" name="department" autocomplete="off" required>
                        </div>
                        <div class="col-lg-4">
                          <select name="gender" required>
                            <option value="" selected disabled hidden>Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="not_specified">Rather not to say</option>
                          </select>
                        </div>
                        <div class="col-lg-4">
                          <select  name="appointment_type" required>
                            <option value="" selected disabled hidden>Appointment Type</option>
                            <option value="Initial Appointment">Initial Appointment</option>
                            <option value="Follow-up Appointment">Follow-up Appointment</option>
                          </select>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" placeholder="Your Faculty Advisor" name="faculty_advisor" autocomplete="off" required>
                        </div>
                        <div class="col-lg-6">
                          <select  name="counsellor_name" required>
                            <option value="" selected disabled hidden>Choose Your Counsellor</option>
                            @foreach($counsellors as $counsellor)
                                <option value="{{ $counsellor->id }}">{{ $counsellor->name }}-{{ $counsellor->profession}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-lg-3">
                          <input type="text" id="date" name="date" placeholder="Choose Your Date" onfocus="(this.type='date')"autocomplete="off" required>
                        </div>
                        <div class="col-lg-3">
                          <select  name="slot" required>
                            <option value="" selected disabled hidden>Choose Your Slot</option>
                            <option value="1">8AM - 9AM</option>
                            <option value="2">9AM - 10AM</option>
                            <option value="3">10AM - 11AM</option>
                            <option value="4">11AM - 12PM</option>
                            <option value="5">12PM - 1PM</option>
                            <option value="6">1PM - 2PM</option>
                            <option value="7">2PM - 3PM</option>
                            <option value="8">3PM - 4PM</option>
                            <option value="9">4PM - 5PM</option>
                          </select>
                        </div>
                        <div class="form-group  col-lg-6">
                            <?php $questionnaires = App\Questionnaire::all(); ?>
                            <select name="assessment_name">
                                <option value="" selected disabled hidden>Choose Assessment(If Taken)</option>
                                @foreach($questionnaires as $questionnaire)
                                    <option value="{{$questionnaire->questionnaireTitle}}">{{$questionnaire->questionnaireTitle}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group  col-lg-6">
                            <input type="text" name="assessment_marks" id="assessment_marks" placeholder="Enter Assessment Marks(If Taken)" autocomplete="off">
                        </div>
                        <div class="col-lg-12 text-center">
                            <textarea placeholder="What do you want to talk about in 100 words" name="message" autocomplete="off" ></textarea>
                        <button type="submit">Submit</button>
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
                    @foreach($featurednews as $news)
                        <div class="col-lg-4 col-md-6">
                            <div class="classes__item">
                                @if(is_null($news->image))
                                <div class="classes__item__pic set-bg" data-setbg="{{ asset('/img/news/default.jpg') }}">
                                    <img src="{{ asset('/img/news/default.jpg') }} alt="">
                                @else
                                <div class="classes__item__pic set-bg" data-setbg="{{ asset('/img/news/'.$news->image) }}">
                                    <img src="{{ asset('/img/news/'.$news->image) }}" alt="">
                                @endif
                                    <span>{{ Carbon\Carbon::parse($news->created_at)->format('d-M-Y') }}</span>
                                </div>
                                <div class="classes__item__text">
                                    <p>{{ $news->source }} </p>
                                    <h4>{{ $news->headline }}</h4>
                                    <p align="justify" style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 7;-webkit-box-orient: vertical;">{{ $news->content }}</p>
                                    <a style="text-decoration: none" href="{{ $news->newsurl }}" class="class-btn" target="_blank">Know More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <center><a style="text-decoration: none" href="{{ url('displayNews') }}" class="primary-btn">View All News & Announcements</a></center>
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
                            <img src="img/about/about-11.jpg" alt="" width="345" height="620">
                        </div>
                        <div class="home__about__pic__item">
                            <div class="home__about__pic__item__inner set-bg" data-setbg="img/about/about-2.jpg">
                                <img src="img/about/about-21.jpg" alt="">
                            </div>
                            <div class="home__about__pic__item__inner set-bg" data-setbg="img/about/about-3.jpg">
                                <img src="img/about/about-31.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" data-step="7" data-intro="This section is introduction to Sahaayak & have a look at it by clicking more about us button because we share & we care." data-position="bottom-middle-aligned">
                    <div class="home__about__text">
                        <span>“We Share coz We Care”</span>
                        <p align="justify">Student Guidance Cell (SGC) aims to provide guidance and counselling services to students
                         based on their needs with assured privacy and confidential exchange of communication. SGC also provides academic
                          support in the form of special classes for students. The formation of SGC was based on the feedback from graduated 
                          students of the institute who stressed on the need to have a facility to counsel and motivate the students.
                           SGC helps the students to function better in all domains of life - academic, social, personal and psychological.</p>
                        <p class="para-2" align="justify">The motive behind SGC stems from the need to facilitate the process of growth and
                         maintain a positive well-being of the students. The counselling services offered by SGC empowers the students to 
                         have enhanced ability to solve problems, make decisions as well as make them more efficient in tackling personal problems.
                          In a nut shell, it is aimed at enhancing their ability to utilize the best potential available in them.</p>
                        <a style="text-decoration: none" href="{{ url('about') }}" class="primary-btn">MORE ABOUT US</a>
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
                        <div class="col-lg-12">
                            <div class="testimonial__text">
                                <p>Being a counsellor at SGC I am thrilled by the quality of support providing to the NITC family through the Sahayak website. It is reliable, and fast and no complications. Sahayak is a great service and finally helping us to live in Mental health in better and beautiful way...</p>
                                <img src="{{ asset('/img/team/aneesh.PNG') }}" alt="">
                                <h5>Dr Aneesh T<span>- psychologist</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="testimonial__text">
                                <p>As a Counsellor at SGC, I used to help and support people to manage their lives. But Covid 19 outbreak changed everything and we are compelled to provide online Psychological services. We have now taken a new step through Sahaayak Website.  It is going to be a major milestone in SGC's development. Sahaayak is really an user friendly, easy to handle platform which assures 100% confidentiality.</p>                                
                                <img src="{{ asset('/img/team/neethu.PNG') }}" alt="">
                                <h5>Neethu A T<span>- Psychologist</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>I am beyond impressed with the help we received here,and continue to receive. Counsellors are professional, open minded, accessible and knowledgeable. I am happy.</p>
                                <img src="img/testimonial/default.PNG" alt="">
                                <h5>Anonymous<span>- Student</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>The SGC Teams are extremely well-trained and provide a welcoming safe space for all of the students! I would highly highly recommend the SGC to anyone and everyone!</p>
                                <img src="img/testimonial/default.PNG" alt="">
                                <h5>Anonymous<span>- Student</span></h5>
                            </div>
                        </div>
                    </div>
                </div> 
             </div>
        </div>
    </section>
    <!-- Testimonial Section End -->
    @endsection