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
					<a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary">See Analytics</a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
		    <div class="card">
		        <div class="card-body">
			        <h5 class="card-title">Users</h5>
			        <h1 align="center">300</h1>
			        <p class="card-text">Active Users who used our service</p>
			        <a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary">See Analytics</a>
		        </div>
		    </div>
		</div>
		<div class="col-sm-3">
		    <div class="card">
		        <div class="card-body">
			        <h5 class="card-title">Volunteers</h5>
			        <h1 align="center">100</h1>
			        <p class="card-text">Users who applied as volunteers.</p>
			        <a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary">See Analytics</a>
		        </div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card">
			    <div class="card-body">
			        <h5 class="card-title">Badges</h5>
			        <h1 align="center">50</h1>
			        <p class="card-text">Given to recognized volunteers after verification</p>
			        <a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary">See Analytics</a>
			    </div>
			</div>
		</div>
	</div>
</div>
<br>

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
                    <form>

                    	<label for="author">Author</label>
					  	<div class="form-group row">
							<div class="col">
					      		<input type="text" class="form-control" placeholder="First name">
					    	</div>
					    	<div class="col">
					      		<input type="text" class="form-control" placeholder="Last name">
					    	</div>
					 	</div>
					   	<div class="form-group">
					    	<label for="formGroupExampleInput">Heading</label>
					    	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Heading of the Post">
					   	</div>
					   	<div class="form-group">
						    <label for="exampleFormControlTextarea1">Textarea</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
					   	</div>
						<div class="custom-control custom-checkbox mb-3">
							<input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
						    <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
						    <div class="invalid-feedback">Example invalid feedback text</div>
						</div>
						<div class="custom-control custom-radio">
						    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
						    <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
						</div>
						<div class="custom-control custom-radio mb-3">
						    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
						    <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
						    <div class="invalid-feedback">More example invalid feedback text</div>
						</div>
						<div class="form-group">
						    <select class="custom-select" required>
						      	<option value="">Please select the category</option>
						      	<option value="1">Depression</option>
						      	<option value="2">Suicide</option>
						      	<option value="3">Stress</option>
						      	<option value="4">Stigma</option>
						      	<option value="5">Healthy Sleep</option>
						      	<option value="6">Mental Illness</option>
						     	<option value="7">Hopelessness</option>
						     	<option value="8">Fear of Loss</option>
						     	<option value="9">Social Isolation</option>
						    </select>
						</div>
						<div class="custom-file">
						    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
						    <label class="custom-file-label" for="validatedCustomFile">Choose Image for the Post...</label>
						</div>
						<center><button type="submit" class="btn btn-primary">Submit</button></center>
					</form>
                </div>
                <!-- Expert_talks form end -->


	<!-- news form begin -->
     <div class="tab-pane fade" id="news" role="tabpanel">
            @include('news.create')
                            </div>
                            <!-- news form end -->


                            <!-- inspire_me form begin -->
                            <div class="tab-pane fade" id="inspire_me" role="tabpanel">
                                <form>
                                	<!-- Radios start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Radios</h4>
                            <p class="text-muted mb-3">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
                            <form action="#">
                                <b class="text-muted mb-3 d-block">Radios:</b>
                                <div class="custom-control custom-radio">
                                    <input type="radio" checked id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Checked Radios</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Unchecked Radios</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" checked disabled id="customRadio3" name="customRadio33" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Disabled Radios</label>
                                </div>
                                <b class="text-muted mb-3 mt-4 d-block">Inline Radios:</b>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" checked id="customRadio4" name="customRadio2" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4">Checked Radios</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio5" name="customRadio2" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio5">Unchecked Radios</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" checked disabled id="customRadio6" name="customRadio3" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio6">Disabled Radios</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Radios end -->
								</form>
                            </div>
                            <!-- inspire_me form end -->




<!-- videos form begin -->
                            <div class="tab-pane fade" id="videos" role="tabpanel">
                                
                                <!--
                                <form>-->
                                	<!-- Checkboxes start -->
                <!--<div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Checkboxes</h4>
                            <p class="text-muted mb-3">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
                            <form action="#">
                                <b class="text-muted mb-3 d-block">Checkbox:</b>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" checked class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">checked Checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Unchecked Checkbox</label>
                                </div>
                                <div class="mb-3"></div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" checked disabled class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">checked Checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" disabled class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Unchecked Checkbox</label>
                                </div>
                                <b class="text-muted mb-3 mt-4 d-block">Inline Checkbox:</b>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" checked class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">checked Checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label" for="customCheck6">Unchecked Checkbox</label>
                                </div>
                                <div class="mb-3"></div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" checked disabled class="custom-control-input" id="customCheck7">
                                    <label class="custom-control-label" for="customCheck7">checked Checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" disabled class="custom-control-input" id="customCheck8">
                                    <label class="custom-control-label" for="customCheck8">Unchecked Checkbox</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>-->
                <!-- Checkboxes end -->
                <!-- button with dropdown start -->
                <!--
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Buttons with dropdowns</h4>
                            <p class="text-muted mb-3">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
                            <form action="#">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>-->
                <!-- button with dropdown end -->
								<!--</form>-->
                                @include('video.create')
                            </div>
<!-- videos form end -->




                            <!-- playlists form begin -->
                            <div class="tab-pane fade" id="playlists" role="tabpanel">
                                <form>
                                	<label>Playlists</label>
								   	<div class="form-group">
								    	<label for="formGroupExampleInput">Heading</label>
								    	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Heading of the Post">
								   	</div>
								   	<div class="form-group">
									    <label for="exampleFormControlTextarea1">Textarea</label>
									    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
								   	</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
									    <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
									    <div class="invalid-feedback">Example invalid feedback text</div>
									</div>
									<div class="custom-control custom-radio">
									    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
									    <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
									</div>
									<div class="custom-control custom-radio mb-3">
									    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
									    <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
									    <div class="invalid-feedback">More example invalid feedback text</div>
									</div>
									<div class="form-group">
									    <select class="custom-select" required>
									      	<option value="">Please select the category</option>
									      	<option value="1">Depression</option>
									      	<option value="2">Suicide</option>
									      	<option value="3">Stress</option>
									      	<option value="4">Stigma</option>
									      	<option value="5">Healthy Sleep</option>
									      	<option value="6">Mental Illness</option>
									     	<option value="7">Hopelessness</option>
									     	<option value="8">Fear of Loss</option>
									     	<option value="9">Social Isolation</option>
									    </select>
									</div>
									<div class="custom-file">
									    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
									    <label class="custom-file-label" for="validatedCustomFile">Choose Image for the Post...</label>
									</div>
									<center><button type="submit" class="btn btn-primary">Submit</button></center>
								</form>
                            </div>
                            <!-- playlists form end -->



<!-- assessments form begin -->

                            <div class="tab-pane fade" id="assessments" role="tabpanel">
                                <!--
                                <form>
                                	<label>Assessments</label>
								   	<div class="form-group">
								    	<label for="formGroupExampleInput">Heading</label>
								    	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Heading of the Post">
								   	</div>
								   	<div class="form-group">
									    <label for="exampleFormControlTextarea1">Textarea</label>
									    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
								   	</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
									    <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
									    <div class="invalid-feedback">Example invalid feedback text</div>
									</div>
									<div class="custom-control custom-radio">
									    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
									    <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
									</div>
									<div class="custom-control custom-radio mb-3">
									    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
									    <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
									    <div class="invalid-feedback">More example invalid feedback text</div>
									</div>
									<div class="form-group">
									    <select class="custom-select" required>
									      	<option value="">Please select the category</option>
									      	<option value="1">Depression</option>
									      	<option value="2">Suicide</option>
									      	<option value="3">Stress</option>
									      	<option value="4">Stigma</option>
									      	<option value="5">Healthy Sleep</option>
									      	<option value="6">Mental Illness</option>
									     	<option value="7">Hopelessness</option>
									     	<option value="8">Fear of Loss</option>
									     	<option value="9">Social Isolation</option>
									    </select>
									</div>
									<div class="custom-file">
									    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
									    <label class="custom-file-label" for="validatedCustomFile">Choose Image for the Post...</label>
									</div>
									<center><button type="submit" class="btn btn-primary">Submit</button></center>
								</form>
                            </div>-->
                            <div class="card">
                <div class="card-header">Available Questionnaires</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @foreach($questionnaires as $questionnaire)
                    <div>
                    <a href="/admin/home/questionnaires/{{$questionnaire->id}}/questions/create">{{$questionnaire->questionnaireTitle}}</a>
                    </div>
                    @endforeach
                    
                    <div>
                        <a href="/admin/home/questionnaires/create" class="btn btn-dark">create new questionnaire</a>
                    </div>
                </div>
            </div>
                            
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
                                            <!--
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            -->
                                        </td>
                                        <td>
                        <a href="/admin/home/volunteer/{{$unapprovedVolunteer->id}}/getDetails">get details</a>
                                            <!--
                                            <span class="status-p bg-primary">pending</span>
                                            -->
                                            </td>
                                        <td>
<a class="btn btn-info" href="/admin/home/volunteer/{{$unapprovedVolunteer->id}}/approveVolunteer">Approve</a>
                                            <!--
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                            </ul>
                                            -->
                                        </td>
                                    </tr>
                                    @endforeach
                                    <!--
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>09 / 07 / 2018</td>
                                        <td>
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td><span class="status-p bg-warning">pending</span></td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Mark</td>
                                        <td>09 / 07 / 2018</td>
                                        <td>
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td><span class="status-p bg-success">complate</span></td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Mark</td>
                                        <td>09 / 07 / 2018</td>
                                        <td>
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td><span class="status-p bg-warning">panding</span></td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                -->
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