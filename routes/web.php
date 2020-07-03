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

#Route::get('login', function () {
 #   return view('login');
#});
//venkat news routes
Route::get('news','NewsController@index')->name('news');
Route::get('news/create','NewsController@create');
Route::post('admin/news','NewsController@store')->name('storenews');
Route::get('displayNews','NewsController@display')->name('displayNews');

//venkat news routes end
Route::get('shared_stories', function () {
    return view('shared_stories');
});


#Route::get('story', function () {
 #   return view('story');
#});

Route::get('talks', function () {
    return view('talks');
});


//dileep added routes

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');



//admin page route
Route::get('admin/home', 'HomeController@adminHome')->name('adminDashboard')->middleware('is_admin');

//volunteer dashboard route
Route::get('volunteer/home', 'HomeController@volunteerHome')->name('volunteerDashboard');

//Questionnaire Routes
Route::get('admin/home/questionnaires/create','QuestionnaireController@create');
Route::post('admin/home/questionnaires','QuestionnaireController@store');
Route::get('admin/home/questionnaires/{questionnaire}','QuestionnaireController@show');
Route::get('admin/home/questionnaires/{questionnaire}/edit','QuestionnaireController@edit');
Route::patch('admin/home/questionnaires/{questionnaire}','QuestionnaireController@update');
Route::delete('admin/home/questionnaires/{questionnaire}','QuestionnaireController@destroy');
Route::get('admin/home/questionnaires/{questionnaire}/complete','QuestionnaireController@complete');

//Question Routes
Route::get('admin/home/questionnaires/{questionnaire}/questions/create','QuestionController@create');
Route::post('admin/home/questionnaires/{questionnaire}/questions','QuestionController@store');
Route::get('home/questionnaires/{questionnaire}/questions','QuestionController@show');
Route::post('home/questionnaires/{questionnaire}/getResult','QuestionController@getResult');
Route::get('admin/home/questionnaires/{questionnaire}/editQuestions','QuestionController@editQuestions');
Route::get('admin/home/questionnaires/{questionnaire}/questions/{question}/edit','QuestionController@edit');
Route::patch('admin/home/questionnaires/{questionnaire}/questions/{question}','QuestionController@update');
Route::delete('admin/home/questionnaires/{questionnaire}/questions/{question}','QuestionController@destroy');

//Admin Video Route
Route::get('admin/home/videos/create','VideoController@create');
Route::post('admin/home/videos','VideoController@store');

//Subscription Routes
Route::post('home/subscribe','SubscriptionController@store');

//Registration Routes
Route::get('register/step2/{user}','VolunteerController@step2');
Route::post('register/step2/{user}','VolunteerController@store');

//User HopeBox Video Routes
Route::get('home/hopebox/videos','HopeBoxController@displayVideos');

//Admin Volunteer list Routes
Route::get('admin/home/volunteer/{unapprovedVolunteer}/getDetails','VolunteerController@getDetails');
Route::get('admin/home/volunteer/{unapprovedVolunteer}/approveVolunteer','VolunteerController@approveVolunteer');

//Learn Routes
Route::get('home/learn/{learn}/{learnID}','LearnController@show');
Route::post('home/learn/{learn}/comment/{learnID}','CommentController@store');

//end of dileep added routes

Route::get('team', function () {
    return view('team');
});

Route::get('inspire_me', function () {
    return view('inspire_me');
});

Route::post('/appointment_controller','appointment_controller@save');
Route::get('/suggestion_controller','suggestion_controller@save');

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

//User Dashboard post a story form

Route::post('/postStory','StoryController@store')->name('addStoryFields');
Route::get('/displayStories','StoryController@display');
Route::get('/incrementLike/{story}', 'StoryController@incrementLike')->name('increment');

//Admin expert talks routes
Route::post('/postTalks','TalkController@store')->name('addTalksFields');
Route::get('/displayTalks','TalkController@display');

//Diary routes by john & ganesh
Route::post('home/displaydiary','diary_controller@save')->name('addFields');
Route::get('/displayStories','StoryController@display');
Route::get('/incrementLike/{story}', 'StoryController@incrementLike')->name('increment');

Route::get('/weavesilk', function () {
    return view('weavesilk');
});
