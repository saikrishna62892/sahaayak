@extends('layouts.dashboard')

@section('content')
		
<br>	
<div class="container" id="stats">
	<div class="row">
		<div class="col-sm-3">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Visitors</h5>
					<h1 align="center">2000</h1>
					<p class="card-text">Number of unique website visitors.</p>
					<a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary" target="_blank">See Analytics</a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
		    <div class="card">
		        <div class="card-body">
			        <h5 class="card-title">Users</h5>
			        <h1 align="center">{{ $users_count }}</h1>
			        <p class="card-text">Active Users who used our service</p>
			        <a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary" target="_blank">See Analytics</a>
		        </div>
		    </div>
		</div>
		<div class="col-sm-3">
		    <div class="card">
		        <div class="card-body">
			        <h5 class="card-title">Volunteers</h5>
			        <h1 align="center">{{ $volunteers_count }}</h1>
			        <p class="card-text">Users who applied as volunteers.</p>
			        <a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary" target="_blank">See Analytics</a>
		        </div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card">
			    <div class="card-body">
			        <h5 class="card-title">Badges</h5>
			        <h1 align="center">{{ $badges }}</h1>
			        <p class="card-text">Given to recognized volunteers after verification</p>
			        <a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary" target="_blank">See Analytics</a>
			    </div>
			</div>
		</div>
	</div>
</div>
<br>

<!-- flash messages section -->
<div class="container">
    @if(session()->has('message'))
    <center><div class="alert alert-success">{{ session()->get('message')}}</div></center>
    @endif
</div>

<!-- trading history area start -->
<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h4 class="header-title">Form Handles</h4>
                <div class="trd-history-tabs">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#expert_talks" role="tab">Expert Talks</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#news" role="tab">News</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#inspire_me" role="tab">Inspire_me</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#videos" role="tab">Videos</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#playlists" role="tab">Playlists</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#assessments" role="tab">Assessments</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="trad-history mt-4">
                <div class="tab-content" id="myTabContent">
                    <!-- Expert_talks form begin -->
                    <div class="tab-pane fade show active" id="expert_talks" role="tabpanel">
                        <h4 align="center">Expert Talks Form</h4>
                        @include('talks.create')
                    </div>
                    <!-- Expert_talks form end -->

                    <!-- news form begin -->
                     <div class="tab-pane fade" id="news" role="tabpanel">
                        <h4 align="center">News Form</h4>
                        @include('news.create')
                    </div>
                    <!-- news form end -->

                    <!-- inspire_me form begin -->
                    <div class="tab-pane fade" id="inspire_me" role="tabpanel">
                        <h4 align="center">Inspire Me Form</h4>
                                    
                    </div>

                    <!-- videos form begin -->
                    <div class="tab-pane fade" id="videos" role="tabpanel">
                        <h4 align="center">Videos Form</h4>
                        @include('video.create')
                    </div>
                    <!-- videos form end -->

                    <!-- playlists form begin -->
                    <div class="tab-pane fade" id="playlists" role="tabpanel">
                        <h4 align="center">Playlists Form</h4>
                                    
                    </div>
                    <!-- playlists form end -->

                    <!-- assessments form begin -->
                    <div class="tab-pane fade" id="assessments" role="tabpanel">
                        @include('questionnaire.allquestionnaires')
                    </div>
                    <!-- assessments form end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- trading history area end -->
<br>



<!-- trading history area start -->
<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h4 class="header-title">Shared Handles</h4>
                <div class="trd-history-tabs">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#shared_news" role="tab">Shared News</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_talks" role="tab">Shared Talks</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_inspire_me" role="tab">Shared Quotes</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_videos" role="tab">Shared Videos</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_playlists" role="tab">Shared Playlists</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="trad-history mt-4">
                <div class="tab-content" id="myTabContent">
                    <!-- shared_news form begin -->
                    <div class="tab-pane fade show active" id="shared_news" role="tabpanel">
                        <h4 align="center">Shared News</h4>
                        @include('news.shared_news')
                    </div>
                    <!-- shared_news form end -->
                            
                    <!-- shared_talks form begin -->
                    <div class="tab-pane fade" id="shared_talks" role="tabpanel">
                        <h4 align="center">Shared Talks</h4>
                        @include('talks.shared_talks')
                    </div>
                    <!-- shared_talks form end -->

                    <!-- shared_inspire_me form begin -->
                    <div class="tab-pane fade" id="shared_inspire_me" role="tabpanel">
                        <h4 align="center">Shared Quotes</h4>
                                    
                    </div>
                    <!-- shared_inspire_me form end -->

                    <!-- shared_videos form begin -->
                    <div class="tab-pane fade" id="shared_videos" role="tabpanel">
                        <h4 align="center">Shared Videos</h4>
                        @include('video.shared_videos')
                    </div>
                    <!-- shared_videos form end -->

                    <!-- shared_playlists form begin -->
                    <div class="tab-pane fade" id="shared_playlists" role="tabpanel">
                        <h4 align="center">Shared Playlists</h4>
                                    
                    </div>
                    <!-- shared_playlists form end -->   

                     <!-- assessments form begin -->
                    <div class="tab-pane fade" id="all_assessments" role="tabpanel">
                        <h4 align="center">All Assessments</h4>
                        @include('questionnaire.allquestionnaires')
                    <!-- assessments form end -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- trading history area end -->


    <div class="main-content-inner" id="table">
    	<div class="row">
        <!-- Progress Table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">UnApproved Volunteers Table</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone No</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Verification</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{ $count=1 }}
                                    @foreach($unapprovedVolunteers as $unapprovedVolunteer)
                                    <tr>
                                        <th scope="row">{{ $count++ }}</th>
                                        <td>{{ $unapprovedVolunteer->name }}</td>
                                        <td>{{ $unapprovedVolunteer->phone}}</td>
                                        <td>
                                            {{ $unapprovedVolunteer->user->email }}
                                        </td>
                                        <td>
                                            <a href="/admin/home/volunteer/{{$unapprovedVolunteer->id}}/getDetails">get details</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-info" href="/admin/home/volunteer/{{$unapprovedVolunteer->id}}/approveVolunteer">Approve</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Progress Table end -->
    </div>
</div>

@endsection