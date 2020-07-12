<?php

use Illuminate\Support\Facades\Route;
use App\Notifications\QuestionnaireNotification;
use App\User;
use Carbon\Carbon;
use App\dialyquotes;
use App\News;

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

Route::get('/',function(){
    $dialyquote=dialyquotes::all()->last()->quote;
        $featurednews=News::orderBy('created_at','desc')->take(3)->get();
        #dd($featurednews);
        return view('welcome')->with(compact('dialyquote','featurednews'));
});


Route::get('about', function () {
    $user_count=App\User::all()->count();
    $volunteers_count=App\Volunteer::all()->count();
    $appointments_count=App\Appointment::all()->count();
    $stories_count=App\Story::all()->count();
    return view('about',compact('user_count','volunteers_count','appointments_count','stories_count'));
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
Route::get('admin/home/editNews/{newsarticle}/articledited','NewsController@editnews')->name('editNews');
Route::patch('admin/home/news/{newsarticle}','NewsController@update');
Route::get('admin/home/editTalk/{talk}/talkedited','TalkController@edittalk');
Route::patch('admin/home/edittalks/{talk}','TalkController@update');
Route::get('/admin/home/editQuote/{quote}/quoteedited','QuoteController@editquote');
Route::patch('/admin/home/editQuote/{quote}','QuoteController@update');
Route::get('/admin/home/editVideo/{video}/videoedited','VideoController@editvideo');
Route::patch('/admin/home/editVideo/{video}','VideoController@update');
Route::get('/admin/home/editPlaylist/{playlist}/playlistedited','PlaylistController@editplaylist');
Route::patch('/admin/home/editPlaylist/{playlist}','PlaylistController@update');

Route::get('admin/home/deleteNews/{newsarticle}/articledeleted','NewsController@deletenews');
Route::get('admin/deleteTalk/{talkid}/talkdeleted','TalkController@deletetalk');
Route::get('admin/deleteQuote/{quoteid}/quotedeleted','QuoteController@deletequote');
Route::get('admin/deleteVideo/{video}/videodeleted','VideoController@deletevideo');
Route::get('admin/deletePlaylists/{playlist}/playlistdeleted','PlaylistController@deleteplaylist');




Route::post('/appointment_controller','appointment_controller@save');


Route::get('volunteer/appointment/{appointment}/acceptAppointment','appointment_controller@appointmentAccepted');


Route::get('/suggestion_controller','suggestion_controller@save');


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

Auth::routes(['verify' => true]);

Route::get('home', 'HomeController@welcome')->name('home');

//user page route
Route::get('user/home', 'HomeController@userHome')->name('userDashboard')->middleware('is_user');

//admin page route
Route::get('admin/home', 'HomeController@adminHome')->name('adminDashboard')->middleware('is_admin');

//volunteer dashboard route
Route::get('volunteer/home', 'HomeController@volunteerHome')->name('volunteerDashboard')->middleware('is_volunteer');

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
Route::get('/home/subscribe','SubscriptionController@store');

//Registration Routes
Route::get('/register/step2/{user}','VolunteerController@step2');
Route::post('/register/step2/{user}','VolunteerController@store');

//User HopeBox Video Routes
Route::get('/videos','HopeBoxController@displayVideos')->name('videos');


//Admin Volunteer list Routes
Route::get('/admin/home/volunteer/{unapprovedVolunteer}/getDetails','VolunteerController@getDetails');
Route::get('/admin/home/volunteer/{unapprovedVolunteer}/approveVolunteer','VolunteerController@approveVolunteer');


//Report Routes

Route::post('/volunteer/report/generateReport','appointment_controller@generateReport');
Route::get('/volunteer/appointment/{appointment}/report','appointment_controller@reportForm');
Route::post('/admin/report/{appointment}/generateReport','appointment_controller@generateReport');


//learn section routes
Route::get('home/learn/{learn}/{learnID}','LearnController@show');



//worry tree routes
Route::get('/worry', 'WorryController@show');
Route::post('/home/user/worrytree','WorryController@store');

//waiting approval
Route::get('volunteer/waitingArroval',function()
{
    return view('volunteer.waitingApproval');
});

//end of dileep added routes

Route::get('team', function () {
    return view('team');
});

Route::get('inspire_me', function () {
    return view('inspire_me');
})->name('inspire_me');



# bell icon routes start

Route::get('markAsRead',function(){

    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();

})->name('markRead');

Route::get('/home/abc',function(){

    auth()->user()->unreadNotifications->markAsRead();
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
Route::get('/displayTalks','TalkController@display')->name('displayTalks');

//Diary routes by john & ganesh
Route::post('home/displaydiary','diary_controller@save')->name('addFields');
Route::get('/displayStories','StoryController@display');
Route::get('/incrementLike/{story}', 'StoryController@incrementLike')->name('increment');

//Inspireme routes by john&ganesh
Route::post('/admin/home','QuoteController@save')->name('addFields');
Route::get('/inspire_me','QuotesViewController@index');

//DialyQuote
Route::post('/','HomeController@dialyQuote')->name('dialyQuote');

//Playlists routes by john&ganesh
Route::post('/createPlaylist','PlaylistController@save')->name('createPlaylist');
Route::get('/playlists','PlaylistController@index')->name('playlists');

//Googlesignup routes by john&ganesh
Route::get('google', function () {
    return view('auth/register');
});
    
Route::get('/auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('/auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

//Facebooksignup routes by john&ganesh
Route::get('facebook', function () {
    return view('auth/register');
});
    
Route::get('/auth/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('/auth/facebook/callback', 'Auth\LoginController@handleFacebookCallback');



Route::get('/interactiveDrawing', function () {
    return view('interactive_drawing');
});
