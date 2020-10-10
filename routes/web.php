<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/signin', function () {
    return view('auth/signup');
});

Route::get('/signup', function () {
    return view('auth/signin');
});

// User
Route::get('/user', 'UserController@index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::get('/user/{id}', 'UserController@show')->name('user.show')->middleware('auth');

// Route::post('/user', 'UserController@store')->name('user.add');

// Challenges
Route::get('/challenges', 'ChallengeController@index')->name('challenges.index');
Route::get('/challenges/create', 'ChallengeController@create')->name('challenges.create')->middleware('admin');
Route::get('/challenges/{id}', 'ChallengeController@show')->name('challenges.show')->middleware('admin');

Route::post('/challenges', 'ChallengeController@store');

// User Challenges
Route::post('/userchallenges/{user_id}/{challenge_id}', 'UserChallengeController@update')->name('userchallenges.update')->middleware('auth');
Route::post('/userchallenge', 'UserChallengeController@store')->name('userchallenges.store')->middleware('auth');

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

Auth::routes();

Route::get('/', function() {
    if(Auth::check()) {
        return view('user.show', ['user' => Auth::user()]);
    }
    return view('index');
})->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/unauthorized', function() {
    return view('auth/unauthorized');
})->name('unauthorized');