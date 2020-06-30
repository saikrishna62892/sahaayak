@extends('layouts.dashboard')

@section('content')
<br>    
<div class="container" id="stats">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Checkins</h5>
                    <h1 align="center">2000</h1>
                    <p class="card-text">Number of times logged into sahaayak.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Posts</h5>
                    <h1 align="center">300</h1>
                    <p class="card-text">Num of posts posted in the website</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Diary</h5>
                    <h1 align="center">100</h1>
                    <p class="card-text">Number of times events added in the diary</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ToDo List</h5>
                    <h1 align="center">50</h1>
                    <p class="card-text">Number of items in the todo List</p>
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
                <h4 class="header-title">Handles</h4>
                <div class="trd-history-tabs">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#diary" role="tab">Cognitive Diary</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#news" role="tab">News</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#habits" role="tab">Habits</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#stories" role="tab">Shared Stories</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#weavesilk" role="tab">Weave Silk</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#worrytree" role="tab">Worry Tree</a>
                        </li>
                    </ul>
                </div>
            </div>
        <div class="trad-history mt-4">
            <div class="tab-content" id="myTabContent">
                <!-- Expert_talks form begin -->
                <div class="tab-pane fade show active" id="diary" role="tabpanel">
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
        <form>
            <!-- Textual inputs start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Textual inputs</h4>
                            <p class="text-muted font-14 mb-4">Here are examples of <code>.form-control</code> applied to each textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Text</label>
                                <input class="form-control" type="text" value="Carlos Rath" id="example-text-input">
                            </div>
                            <div class="form-group">
                                <label for="example-search-input" class="col-form-label">Search</label>
                                <input class="form-control" type="search" value="Where is google office" id="example-search-input">
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="col-form-label">Email</label>
                                <input class="form-control" type="email" value="name@example.com" id="example-email-input">
                            </div>
                            <div class="form-group">
                                <label for="example-url-input" class="col-form-label">URL</label>
                                <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                            </div>
                            <div class="form-group">
                                <label for="example-tel-input" class="col-form-label">Telephone</label>
                                <input class="form-control" type="tel" value="+880-1233456789" id="example-tel-input">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="">Password</label>
                                <input type="password" class="form-control" id="inputPassword" value="inputPassword" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="example-number-input" class="col-form-label">Number</label>
                                <input class="form-control" type="number" value="42" id="example-number-input">
                            </div>
                            <div class="form-group">
                                <label for="example-datetime-local-input" class="col-form-label">Date and time</label>
                                <input class="form-control" type="datetime-local" value="2018-07-19T15:30:00" id="example-datetime-local-input">
                            </div>
                            <div class="form-group">
                                <label for="example-date-input" class="col-form-label">Date</label>
                                <input class="form-control" type="date" value="2018-03-05" id="example-date-input">
                            </div>
                            <div class="form-group">
                                <label for="example-month-input" class="col-form-label">Month</label>
                                <input class="form-control" type="month" value="2018-05" id="example-month-input">
                            </div>
                            <div class="form-group">
                                <label for="example-week-input" class="col-form-label">Week</label>
                                <input class="form-control" type="week" value="2018-W32" id="example-week-input">
                            </div>
                            <div class="form-group">
                                <label for="example-time-input" class="col-form-label">Time</label>
                                <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Select</label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Custom Select</label>
                                <select class="custom-select">
                                    <option selected="selected">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input-lg" class="col-form-label">Large</label>
                                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg">
                            </div>
                            <div class="form-group">
                                <label for="example-text-input-sm" class="col-form-label">Small</label>
                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="example-text-input-sm">
                            </div>
                            <div class="form-group has-primary">
                                <label for="inputHorizontalPrimary" class="col-form-label">Email</label>
                                <input type="email" class="form-control form-control-primary" id="inputHorizontalPrimary" placeholder="name@example.com">
                                <div class="form-control-feedback">Primary! You've done it.</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                            <div class="form-group has-warning">
                                <label for="inputHorizontalWarning" class="col-form-label">Email</label>
                                <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                <div class="form-control-feedback">Shucks, check the formatting of that and try again.
                                </div><small class="form-text text-muted">Example help text that remains unchanged.
                                </small>
                            </div>
                            <div class="form-group mb-0 has-danger">
                                <label for="inputHorizontalDnger" class="col-form-label">Email</label>
                                <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div><small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Textual inputs end -->
                                </form>
                            </div>
                            <!-- news form end -->


                            <!-- inspire_me form begin -->
                            <div class="tab-pane fade" id="habits" role="tabpanel">
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
                            <div class="tab-pane fade" id="stories" role="tabpanel">
                                <form>
                                    <!-- Checkboxes start -->
                <div class="col-12 mt-5">
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
                </div>
                <!-- Checkboxes end -->
                <!-- button with dropdown start -->
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
                </div>
                <!-- button with dropdown end -->
                                </form>
                            </div>
                            <!-- videos form end -->

                            <!-- playlists form begin -->
                            <div class="tab-pane fade" id="weavesilk" role="tabpanel">
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
                            <div class="tab-pane fade" id="worrytree" role="tabpanel">
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
                            </div>
                            <!-- assessments form end -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trading history area end -->


@endsection 