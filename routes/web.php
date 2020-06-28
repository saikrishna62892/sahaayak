<?php

use Illuminate\Support\Facades\Route;
use App\Notifications\QuestionnaireNotification;
use App\User;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*   Guys Maintain the list in sorted_order */

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('expert_story', function () {
    return view('expert_story');
});

Route::get('joinus', function () {
    return view('joinus');
});

Route::get('learn_depression', function () {
    return view('learn_depression');
});

Route::get('learn_fear_of_loss', function () {
    return view('learn_fear_of_loss');
});

Route::get('learn_healthy_sleep', function () {
    return view('learn_healthy_sleep');
});

Route::get('learn_hopelessness', function () {
    return view('learn_hopelessness');
});

Route::get('learn_mental_illness', function () {
    return view('learn_mental_illness');
});

Route::get('learn_social_isolation', function () {
    return view('learn_social_isolation');
});

Route::get('learn_stigma', function () {
    return view('learn_stigma');
});

Route::get('learn_stress', function () {
    return view('learn_stress');
});

Route::get('learn_suicide', function () {
    return view('learn_suicide');
});

#Route::get('login', function () {
 #   return view('login');
#});

Route::get('news', function () {
    return view('news');
});

Route::get('shared_stories', function () {
    return view('shared_stories');
});

Route::get('story', function () {
    return view('story');
});

Route::get('talks', function () {
    return view('talks');
});

Route::get('volunteer_signup', function () {
    return view('volunteer_signup');
});

//dileep added routes

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');



//admin page route
Route::get('admin/home', 'HomeController@adminHome')->name('adminDashboard')->middleware('is_admin');

//Questionnaire Routes
Route::get('admin/home/questionnaires/create','QuestionnaireController@create');
Route::post('admin/home/questionnaires','QuestionnaireController@store');
Route::get('admin/home/questionnaires/{questionnaire}','QuestionnaireController@show');

//Question Routes
Route::get('admin/home/questionnaires/{questionnaire}/questions/create','QuestionController@create');
Route::post('admin/home/questionnaires/{questionnaire}/questions','QuestionController@store');
Route::get('home/questionnaires/{questionnaire}/questions','QuestionController@show');
Route::post('home/questionnaires/{questionnaire}/getResult','QuestionController@getResult');

//Video Route
Route::get('admin/home/videos/create','VideoController@create');
Route::post('admin/home/videos','VideoController@store');

//Subscription Routes
Route::post('/home/subscribe','SubscriptionController@store');

//Registration Routes
Route::get('/register/step2/{user}','VolunteerController@step2');
Route::post('/register/step2/{user}','VolunteerController@store');

//end of dileep added routes

Route::get('team', function () {
    return view('team');
});

Route::get('inspire_me', function () {
    return view('inspire_me');
});

Route::post('/appointment_controller','appointment_controller@save');
Route::get('/suggestion_controller','suggestion_controller@save');

Route::get('videos', function () {
    return view('videos');
});

Route::get('playlists', function () {
    return view('playlists');
});

# bell icon routes start

Route::get('markAsRead',function(){

    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();

})->name('markRead');

Route::get('/home/abc',function(){

    #auth()->user()->unreadNotifications->markAsRead();
    #return redirect()->back();
   return redirect()->back();

})->name('gotonewsarticle');

#bell icon routes end

Route::get('dashboard_user', function () {
    return view('dashboard_user');
});

Route::get('dashboard_admin', function () {
    return view('dashboard_admin');
});

Route::get('dashboard_volunteer', function () {
    return view('dashboard_volunteer');
});
