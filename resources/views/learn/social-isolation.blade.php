@extends('layouts.learn')

@section('name')
    Learn | Social-Isoloation
@endsection
@section('breadcrumb')

<h2>Understanding Social-isolation</h2>
<h5>A person is a person through other persons, you can't be human in isolation, you are human only in relationships.</h5>

@endsection

@section('learncontent')

<div class="classes__details__large">
    <img src="/img/classes-details/cd-social.jpg" alt="" width="750" height="400">
        <span>Understanding Social-isolation</span>
</div>

<h2>What is Social-isolation?</h2>

<p>Social isolation can be defined structurally as the absence of social interactions, contacts, and relationships with family and friends, with neighbors on an individual level, and with “society at large” on a broader level.</p>

<div class="classes__details__item">
    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fNyJmYGMhXA" allowfullscreen></iframe>
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
                                                                <p>Loneliness does not depend on how many friends or relationships you have.
                                                                 More than 60% of lonely people are married.</p>
                                                                <p>Studies have found that merely asking people to recall times they felt lonely was sufficient
                                                                 to make them devalue their relationships. These perceptual distortions often cause lonely people
                                                                  to withdraw even further from the very people who could alleviate their loneliness. </p>
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
                                                                <p>There are several causes of social isolation. Some people voluntarily choose to isolate themselves from others.
                                                                For example, an eccentric person may choose to have very little contact with other people.
                                                                 However, in most cases, social isolation is involuntary.</p>
                                                                <p>Social isolation can be caused by physical disabilities or illnesses,
                                                                 Advanced age can also lead to social isolation. As we get older, our health and mobility decline,
                                                                  and our social roles change. Our living arrangements may also change. </p>
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
                                                                <p>Living alone, have recently suffered a bereavement.</p>
                                                                <p>Not leaving the house regularly.</p>
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
                                                                <p>Reduce access to the three "A's": Alienation, Anger, and Unfounded Anxiety</p>
                                                                <p>Seek out healthy activities.  Reach out to family and friends. Sign up for appointments by volunteers</p>
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
                                                                <p>Health of people who are socially isolated is not so good as those who not shows that the health of people can continuously get better when they are controlled by family members or people around them.</p>
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
Social-isolation
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