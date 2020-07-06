@extends('layouts.learn')

@section('breadcrumb')

<h2>Understanding Healthy-sleep</h2>
<h5>Your future depends on your dreams, so go to sleep.</h5>

@endsection

@section('learncontent')

<div class="classes__details__large">
    <img src="/img/classes-details/cd-sleep.jpg" alt="">
        <span>Understanding Healthy-sleep</span>
</div>

<h2>What is Healthy-sleep?</h2>

<p>Fewer than six and more than ten hours of sleep per day are associated with metabolic syndrome and its individual components.</p>

<div class="classes__details__item">
    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j5Sl8LyI7k8" allowfullscreen></iframe>
    </div>
</div>

@endsection

@section('faq')
                      <div class="container">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="faq__accordion">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="card">
                                                        <div class="card-heading">
                                                            <a data-toggle="collapse" data-target="#collapseOne">
                                                                <span>Myths and Facts</span>
                                                            </a>
                                                        </div>
                                                        <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p>Insufficient as well as excessive sleep are associated with health-related conditions
                                                                 such as hypertension, obesity, diabetes, cardiovascular events or mortality and stroke.</p>
                                                                <p>Metabolic disorder consisting of at least three of the following:
                                                                 elevated waist circumference, high triglyceride levels, low high-density ‘good’
                                                                  cholesterol levels (HDL-C), hypertension and high fasting glucose.</p>
                                                                <h6>Still need help? <a href="{{ url('/#talk_to_us') }}">Get in touch with us.</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-heading active">
                                                            <a data-toggle="collapse" data-target="#collapseTwo">
                                                                <span>Reasons for cause</span>
                                                            </a>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p>Physical disturbances (for example, chronic pain from arthritis, headaches, fibromyalgia)</p>
                                                                <p>Medical issues (for example, asthma)</p>
                                                                <p>Psychiatric disorders (for example, depression and anxiety disorders)</p>
                                                                <p>Environmental issues (for example, it's too bright, it's too timid)</p>
                                                                <h6>Still need help? <a href="{{ url('/#talk_to_us') }}">Get in touch with us.</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-heading">
                                                            <a data-toggle="collapse" data-target="#collapseThree">
                                                                <span>How to identify</span>
                                                            </a>
                                                        </div>
                                                        <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p>It takes you more than 30 minutes to fall asleep after getting into bed. 
                                                                 You have been diagnosed as having insomnia.</p>
                                                                <p>You regularly wake up more than once per night. 
                                                                You find yourself staying awake for more than 20 minutes after waking up in the middle of the night. 
                                                                You spend less than 85 percent of your time in bed asleep. </p>
                                                                <h6>Still need help? <a href="{{ url('/#talk_to_us') }}">Get in touch with us.</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-heading">
                                                            <a data-toggle="collapse" data-target="#collapseFour">
                                                                <span>How to overcome</span>
                                                            </a>
                                                        </div>
                                                        <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p>Stop watching television or using electronic devices like a laptop or cellphone at least 30 minutes before bedtime.
                                                                 The blue light that’s emitted from these gadgets can make it difficult to fall asleep. Set your bedroom thermostat to somewhere between 60 and 67 degrees Fahrenheit.
                                                                   Sleeping in a room that is either too warm or too cool interferes with your body’s ability to drift off.  </p>
                                                                <p>Follow a consistent sleep schedule. Having poor bedtime habits, such as going to bed too early (before you’re tired)
                                                                 or too late (when you’re overly tired) can make it more difficult to sleep soundly.
                                                                 Limit your alcohol consumption to one or two drinks per day.  </p>
                                                                <h6>Still need help? <a href="{{ url('/#talk_to_us') }}">Get in touch with us.</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-heading">
                                                            <a data-toggle="collapse" data-target="#collapseFive">
                                                                <span>Conclusion</span>
                                                            </a>
                                                        </div>
                                                        <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p>Sleep is not only beneficial to physical health but to emotional health, safety and quality of life.
                                                                 A good night's sleep improves learning of any type as it helps in maintaining attention,
                                                                  making decisions, and being creative.</p>
                                                                <h6>Still need help? <a href="{{ url('/#talk_to_us') }}">Get in touch with us.</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-heading">
                                                            <a data-toggle="collapse" data-target="#collapseSix">
                                                                <span>How to contact us</span>
                                                            </a>
                                                        </div>
                                                        <div id="collapseSix" class="collapse" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p>You can chat through virtual chat box.</p>
                                                                <p>You can get a volunteer appointment by clicking below</p>
                                                                <h6>Still need help? <a href="{{ url('/#talk_to_us') }}">Get in touch with us.</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
@endsection

@section('learnname')
Healthy-sleep
@endsection

@section('comments')
    <div class="classes__sidebar__comment">
                                    <div class="classes__sidebar__comment__pic">
                                        <img src="/img/classes-details/comment-1.png" alt="">
                                        <div class="classes__sidebar__comment__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                    <div class="classes__sidebar__comment__text">
                                        <span>04 Mar 2018</span>
                                        <h6>Brandon Kelley</h6>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            adipisci velit,</p>
                                    </div>
                                </div>
                                <div class="classes__sidebar__comment">
                                    <div class="classes__sidebar__comment__pic">
                                        <img src="/img/classes-details/comment-2.png" alt="">
                                        <div class="classes__sidebar__comment__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                    <div class="classes__sidebar__comment__text">
                                        <span>04 Mar 2018</span>
                                        <h6>Christina Kelley</h6>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                                    </div>
                                </div>

@endsection
