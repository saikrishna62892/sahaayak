<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', function () {
    return view('login');
});

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

Route::get('team', function () {
    return view('team');
});

Route::get('inspire_me', function () {
    return view('inspire_me');
});

Route::get('videos', function () {
    return view('videos');
});

Route::get('playlists', function () {
    return view('playlists');
});