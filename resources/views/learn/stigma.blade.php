@extends('layouts.learn')

@section('breadcrumb')

<h2>Understanding Stigma</h2>
<h5>You're stonger even when alone</h5>

@endsection

@section('learncontent')

<div class="classes__details__large">
    <img src="/img/classes-details/cd-stigma.jpg" alt="">
        <span>Understanding Stigma</span>
</div>

<h2>What is Stigma?</h2>

<p>Stigma involves negative attitudes or discrimination against someone based on a distinguishing 
characteristic such as a mental illness, health condition, or disability. 
Social stigmas can also be related to other characteristics including gender, 
sexuality, race, religion, and culture.</p>

<div class="classes__details__item">
    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/49mfPFTZsHs" allowfullscreen></iframe>
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
                                                                <p>Three out of four people with a mental illness report that they have experienced stigma. </p>
                                                                <p>Stigma is a mark of disgrace that sets a person apart from others. When a person is 
                                                                labelled by their illness they are no longer seen as an individual but as part of a 
                                                                stereotyped group. Negative attitudes and beliefs toward this group create prejudice 
                                                                 which leads to negative actions and discrimination. </p>
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
                                                                <p> Stigma has two major components: a public one, 
                                                                or the reaction that the general population has to people with mental illness.</p>
                                                                <p> Self-stigma, or the prejudice that people with mental illness tend to turn against themselves.</p>
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
                                                                 <p>Feelings of shame.</p>
                                                                 <p>Hopelessness and isolation.</p>
                                                                 <p>Reluctance to ask for help or to get treatment.</p>
                                                                 <p>Lack of understanding by family, friends or others.</p>
                                                                 <p>Fewer opportunities for employment or social interaction.</p>
                                                                 <p>Bullying, physical violence or harassment</p>
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
                                                                <p>"Do not hide away". Many people with mental illness want to isolate themselves from the world.
                                                                 Reaching out to people you trust – family, friends, coaches or religious leaders –
                                                                  can mean you get the support you need.</p>
                                                                <p>"Connect with others". Joining a mental health support group – either online or in person –
                                                                 can help you deal with feelings of isolation and make you realise that you are not alone in your feelings
                                                                  and experiences.</p>
                                                                <p>"You are not your illness". Do not define yourself by your illness as other people might.
                                                                 Instead of saying ‘I'm schizophrenic’, say ‘I have schizophrenia’. There is power in language.</p>
                                                                <p>Get the mental health treatment you need. 
                                                                Try not to let the fear of being labelled with a mental illness stop you from getting help.</p>
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
                                                                <p>Researchs suggests that stigma may be reduced by protest, education and contact.
                                                                Through protest, stigma is presented as a morally unjust and people are encouraged 
                                                                not to act in inappropriate ways. Education challenges inaccurate stereotypes about 
                                                                mental illness and replaces these with factual information.
                                                                 Contact, that is face-to-face interactions between a person with a mental illness
                                                                  and the general public, brings the greatest improvements in public attitudes. </p>                                                
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
Stigma
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