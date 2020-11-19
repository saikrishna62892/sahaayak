@extends('layouts.dashboard')

@section('name')
    {{ $admin_name }}
@endsection

@section('content')
		
<br>	
<div class="container" id="stats">
    <h4 align="center">Site Analytics</h4>
    <br>
	<div class="row">
		<div class="col-sm-3">
		    <div class="card shadow p-4 mb-5 bg-white rounded">
		        <div class="card-body">
			        <h5 class="card-title" align="center">Users</h5>
			        <h1 align="center">{{ $users_count }}</h1>
			        <p class="card-text" align="center">Active Users</p>
			        <center><a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary" target="_blank" style="background-color: #5768ad;">See Analytics</a></center>
		        </div>
		    </div>
		</div>
		<div class="col-sm-3">
		    <div class="card shadow p-4 mb-5 bg-white rounded">
		        <div class="card-body">
			        <h5 class="card-title" align="center">Counsellors</h5>
			        <h1 align="center">{{ $counsellors_count }}</h1>
			        <p class="card-text" align="center">Active Counsellors</p>
			        <center><a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary" target="_blank" style="background-color: #5768ad;">See Analytics</a></center>
		        </div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card shadow p-4 mb-5 bg-white rounded">
			    <div class="card-body">
			        <h5 class="card-title" align="center">Gallery</h5>
			        <h1 align="center">{{ $gallery_count }}</h1>
			        <p class="card-text" align="center">Active Volunteers</p>
			        <center><a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary" target="_blank" style="background-color: #5768ad;">See Analytics</a></center>
			    </div>
			</div>
		</div>
        <div class="col-sm-3">
            <div class="card shadow p-4 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title" align="center">Talks</h5>
                    <h1 align="center">{{ $talks_count }}</h1>
                    <p class="card-text" align="center">#expert talks</p>
                    <center><a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary" target="_blank" style="background-color: #5768ad;">See Analytics</a></center>
                </div>
            </div>
        </div>
	</div>
</div>
<br>

<!-- flash messages section -->
<!--<div class="container">
    @if(session()->has('message'))
    <center><div class="alert alert-success">{{ session()->get('message')}}</div></center>
    @endif
</div>-->

<!-- trading history area start -->
<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <div class="card-body">
            <h4 class="header-title">Form Handles</h4>
            <div class="d-sm-flex justify-content-between align-items-center">
                
                <div class="trd-history-tabs">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#addcounsellor" role="tab">Add Counsellor</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#dialyquote" role="tab">Dialy Quote</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#expert_talks" role="tab">Expert Talks</a>
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
                            <a data-toggle="tab" href="#gallery" role="tab">Gallery</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#assessments" role="tab">Assessments</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="trad-history mt-4">
                <div class="tab-content" id="myTabContent">
                    <!-- Add Counsellor Form begin  -->
                    <div class="tab-pane fade show active" id="addcounsellor" role="tabpanel">
                        @include('counsellors.create')
                    </div>
                    <!-- Add Counsellor Form end -->
                    
                    <!-- Dialy Quote Form begin  -->
                    <div class="tab-pane fade" id="dialyquote" role="tabpanel">
                        @include('quotes.dialyquote')
                    </div>
                    <!-- Dialy Quote Form end -->

                    <!-- Expert_talks form begin -->
                    <div class="tab-pane fade" id="expert_talks" role="tabpanel">
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
                        @include('quotes.create')
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
                         @include('playlists.create')           
                    </div>
                    <!-- playlists form end -->
                    <!-- Galley form begin -->
                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                        @include('gallery.create')
                    </div>          
                    <!-- Gallery form end -->

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
</div>
<!-- trading history area end -->
<br>



<!-- trading history area start -->
<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h4 class="header-title">Shared Handles</h4>
                <div class="trd-history-tabs">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#counsellor_accepted" role="tab">Counsellors</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_news" role="tab">News</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_talks" role="tab">Talks</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_inspire_me" role="tab">Quotes</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_videos" role="tab">Videos</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_playlists" role="tab">Playlists</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_gallery" role="tab">Gallery</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#suggestions" role="tab">Suggestions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="trad-history mt-4">
                <div class="tab-content" id="myTabContent">
                    <!-- counsellors_accepted form begin -->
                    <div class="tab-pane fade show active" id="counsellor_accepted" role="tabpanel">
                        <h4 align="center">Counsellors Data</h4>
                        @include('counsellors.counsellor_accepted')
                    </div>
                    <!-- counsellors_accepted form end -->

                    <!-- shared_news form begin -->
                    <div class="tab-pane fade show" id="shared_news" role="tabpanel">
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
                        @include('quotes.shared_quotes')
                                    
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
                        @include('playlists.shared_playlists')
                                    
                    </div>
                    <!-- shared_playlists form end -->

                    <!-- shared_talks form begin -->
                    <div class="tab-pane fade" id="shared_gallery" role="tabpanel">
                        <h4 align="center">Shared Gallery</h4>
                        @include('gallery.shared_gallery')
                    </div>
                    <!-- shared_talks form end -->   

                     <!-- assessments form begin -->
                    <div class="tab-pane fade" id="suggestions" role="tabpanel">
                        <h4 align="center">All Assessments</h4>
                        @include('suggestions')
                    <!-- assessments form end -->
                    </div>
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
            <div class="card shadow p-4 mb-5 bg-white rounded">
                <div class="card-body">
                    <h4 class="header-title" align="center">Pending Volunteers List(Currently Disabled)</h4>
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
                                        <th scope="col" colspan="2">Verification</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1 ?>
                                    @foreach($unapprovedVolunteers as $unapprovedVolunteer)
                                    <tr>
                                        <td scope="row">{{ $count++ }}</td>
                                        <td>{{ $unapprovedVolunteer->name }}</td>
                                        <td>{{ $unapprovedVolunteer->phone}}</td>
                                        <td>
                                            {{ $unapprovedVolunteer->user->email }}
                                        </td>
                                        <td>
                                            <a href="/admin/home/volunteer/{{$unapprovedVolunteer->id}}/getDetails" style="color: #5768ad;">get details</a>
                                        </td>
                                        <td colspan="2">
                                            <a href="/admin/home/volunteer/{{$unapprovedVolunteer->id}}/approveVolunteer" style="color: #5768ad;">Approve?</a>&emsp;
                                            <a href="/admin/home/volunteer/{{$unapprovedVolunteer->id}}/rejectVolunteer" style="color: #5768ad;">Reject</a>
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