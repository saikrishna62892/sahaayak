@extends('layouts.learn')

@section('breadcrumb')

<h2>Understanding Mental-illness</h2>
<h5>Having a mental disorder isn't easy, and it's even harder when people assume you can just get over it</h5>

@endsection

@section('learncontent')

<div class="classes__details__large">
    <img src="/img/classes-details/cd-mentalillness.jpg" alt="">
        <span>Understanding Mental-illness</span>
</div>

<h2>What is Mental-illness?</h2>

<p>Mental illnesses are health conditions involving changes in emotion, thinking or behavior. Mental illnesses are associated with distress and/or problems functioning in social, work or family activities.</p>

<div class="classes__details__item">
    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1i9OktVsTWo" allowfullscreen></iframe>
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
                                                                <p>Mental health problems are very common. About 1 of every 5 people will experience a
                                                                 mental health issue in a given year. One of every 25 has a serious mental health disorder.
                                                                  These include anxiety, major depression, bipolar disorder, and schizophrenia.</p>
                                                                <p>A large majority of mentally ill people are not violent. Only about 7% of violent acts are committed by a person with symptoms of mental illness.
                                                                 In fact, people with serious mental health issues are 10 times more likely to be a victim of violence.
                                                                 Mental illness has nothing to do with strength or weakness.
                                                                  It is a medical disorder that needs treatment.
                                                                   If you need help with a mental issue, you are not weak.</p>
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
                                                                <p>Genetic factors: having a close family member with a mental illness can increase the risk.</p>
                                                                <p>Drug and alcohol abuse: illicit drug use can trigger a manic episode (bipolar disorder) or an episode of psychosis.</p>
                                                                <p>Early life environment: negative childhood experiences such as abuse or neglect can increase the risk of some mental illnesses.</p>
                                                                <p>Trauma and stress: in adulthood, traumatic life events or ongoing stress such as social isolation,
                                                                 domestic violence, relationship breakdown, financial or work problems can increase the risk of mental illness.</p>
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
                                                                <p>Feeling sad or depressed.</p>
                                                                <p>Trouble concentrating.</p>
                                                                <p>Extreme feelings (including fear, guilt, sadness, or anger).</p>
                                                                <p>Withdrawal from friends or activities.</p>
                                                                <p>Extreme mood changes.</p>
                                                                <p>Unexplained hostility or violence.</p>
                                                                <p>Thinking about hurting yourself or others.</p>
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
                                                                <p>Value yourself. Take care of your body</p>
                                                                <p>Surround yourself with good people.</p>
                                                                <p> Learn how to deal with stress.</p>
                                                                <p>Quiet your mind. Set realistic goals.</p>
                                                                <p>Avoid alcohol and other drugs. Get help when you need it.</p>
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
                                                                <p>Mental illness are medical conditions that deserve the same respect, consideration,
                                                                 and right to treatment as any other illness.</p>
                                                                <p>There are many resources available to help people with mental illness or disorders.</p>
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
Mental-illness
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