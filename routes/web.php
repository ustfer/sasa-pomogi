<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', 'ProfileController@show')->name('profile.show');
    Route::get('/profile/evernote', 'ProfileController@evernoteIndex')->name('profile.evernote');
    Route::resource('user', 'UserController');
    Route::get('/user/{user}/calendar', 'UserController@evernoteIndex')->name('user.evernote');
});
// Route::resource('user/{user}/calendar', 'CalendarController');
// Route::resource('user/{user}/evernote', 'CalendarController')->parameters([
//     'evernote' => 'calendar'
// ]);;
