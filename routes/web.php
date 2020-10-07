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

Route::get('/', function () {
    return view('index');
});

Route::get('/signin', function () {
    return view('auth/signup');
});

Route::get('/signup', function () {
    return view('auth/signin');
});

Route::get('/profile', function () {
    return view('user/profile');
});

// Challenges
Route::get('/challenges', 'ChallengeController@index');
Route::get('/challenges/create', 'ChallengeController@create');
Route::get('/challenges/{id}', 'ChallengeController@show');

Route::post('/challenges', 'ChallengeController@store');

// My Badges
Route::get('/mybadges', function () {
    return view('user/mybadges');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/podcast', function () {
    return view('podcast');
});