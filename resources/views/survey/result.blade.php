@extends('layouts.layout')
@section('name')
       Result
    @endsection
@section('content')
<!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items__result set-bg" data-setbg="/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <h1 style="color: #fff;">Hi {{$user_name}}</h1>
                    </div>
                    <div class="card mt-4 shadow-lg p-3 mb-5 bg-white rounded" >
                        <div class="card-header" align="center"><h3 style="color: #5768ad;">Metrics about your {{ $assessment_name }}</h3></div>
                        <div class="card-body">
                            <p>Hi {{$user_name}} we analyzed your assessment responses and here is your {{ $assessment_name }} score : <b>{{ $score }}/{{$questions_count}}</b>.</p>
                            <p>We gathered various data from different sources and created this metric chart below</p>

                            <table class="table table-bordered" align="center" style="max-width: 60%;">
                              <thead align="center">
                                <tr>
                                  <th scope="col" width="150">Score</th>
                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr align="center">
                                    <td>0</td>
                                    <td>You might be the happiest person in the world</td>
                                </tr>
                                <tr align="center">
                                  <td>0 to 4</td>
                                    @if($assessment_name  == "Depression Test")
                                        <td>No Depression</td>
                                    @elseif($assessment_name  == "Anxiety Test")
                                        <td>No Anxiety</td>
                                    @elseif($assessment_name  == "Stress Test")
                                        <td>No Stress</td>
                                    @elseif($assessment_name  == "Social Skills Test")
                                        <td>Good Social Skills</td>
                                    @elseif($assessment_name  == "Concentration")
                                        <td>Good Concentration</td>
                                    @elseif($assessment_name  == "Happiness Test")
                                        <td>You're happy enough</td>
                                    @elseif($assessment_name  == "Sleep Hygiene Test")
                                        <td>Good Sleep Hygiene</td>
                                    @elseif($assessment_name  == "Emotional Intelligence Test")
                                        <td>Good Emotional intelligence</td>
                                    @else
                                        <td>Good Healthy Lifestyle</td>
                                    @endif

                                  
                                </tr>
                                <tr align="center">
                                  <td>4 to 11</td>
                                  @if($assessment_name  == "Depression Test")
                                        <td>Mild Depression</td>
                                    @elseif($assessment_name  == "Anxiety Test")
                                        <td>Mild Anxiety</td>
                                    @elseif($assessment_name  == "Stress Test")
                                        <td>Mild Stress</td>
                                    @elseif($assessment_name  == "Social Skills Test")
                                        <td>Decent Social Skills</td>
                                    @elseif($assessment_name  == "Concentration")
                                        <td>Decent Concentration still need to work on it</td>
                                    @elseif($assessment_name  == "Happiness Test")
                                        <td>You're not happy enough</td>
                                    @elseif($assessment_name  == "Sleep Hygiene Test")
                                        <td>Decent Sleep Hygiene</td>
                                    @elseif($assessment_name  == "Emotional Intelligence Test")
                                        <td>Decent Emotional intelligence</td>
                                    @else
                                        <td>Decent Healthy Lifestyle</td>
                                    @endif
                                  
                                </tr>
                                 <tr align="center">
                                  <td>11 to 15</td>
                                  @if($assessment_name  == "Depression Test")
                                        <td>Severe Depression<br>Contact us : <a href="{{ url('/#talk_to_us') }}" style="color: #5768ad;">Click here</a></td>
                                    @elseif($assessment_name  == "Anxiety Test")
                                        <td>Severe Anxiety<br>Contact us : <a href="{{ url('/#talk_to_us') }}" style="color: #5768ad;">Click here</a></td>
                                    @elseif($assessment_name  == "Stress Test")
                                        <td>Severe Stress<br>Contact us : <a href="{{ url('/#talk_to_us') }}" style="color: #5768ad;">Click here</a></td>
                                    @elseif($assessment_name  == "Social Skills Test")
                                        <td>Bad Social Skills<br>Contact us : <a href="{{ url('/#talk_to_us') }}" style="color: #5768ad;">Click here</a></td>
                                    @elseif($assessment_name  == "Concentration")
                                        <td>Need to work on Concentration<br>Contact us : <a href="{{ url('/#talk_to_us') }}" style="color: #5768ad;">Click here</a></td>
                                    @elseif($assessment_name  == "Happiness Test")
                                        <td>Reach out to Family or Friends<br>Contact us : <a href="{{ url('/#talk_to_us') }}" style="color: #5768ad;">Click here</a></td>
                                    @elseif($assessment_name  == "Sleep Hygiene Test")
                                        <td>Need to work on for better sleep<br>Contact us : <a href="{{ url('/#talk_to_us') }}" style="color: #5768ad;">Click here</a></td>
                                    @elseif($assessment_name  == "Emotional Intelligence Test")
                                        <td>Need to work on for better Emotional Intelligence<br>Contact us : <a href="{{ url('/#talk_to_us') }}" style="color: #5768ad;">Click here</a></td>
                                    @else
                                        <td>Need to work on for better Healthy Lifestyle<br>Contact us : <a href="{{ url('/#talk_to_us') }}" style="color: #5768ad;">Click here</a></td>
                                    @endif
                                  
                                </tr>
                              </tbody>
                            </table>




                            <center><a href="{{ url('/') }}" class="btn primary-btn">Return Home</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Hero Section End -->
@endsection