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

 // Route::get('/', function () {
 //     return view('welcome');
 // }); //this is loading welcome.blade directly on root path (/) 


Route::get('/','IndexController@index')->name('welcome');
Route::get('/profile','Newcontroller@profile')->name('profile');

Route::get('/termcondition','Newcontroller@termcondition')->name('termcondition');
Route::get('/help','Newcontroller@help')->name('help');
Route::get('/customercare','Newcontroller@customercare')->name('customercare');
Route::get('/services','Newcontroller@services')->name('services');
Route::get('/privacypolicy','Newcontroller@privacypolicy')->name('privacypolicy');
Route::get('/follower','Newcontroller@follower')->name('follower');

Route::post('/store', 'PostController@store');
Route::get('/upload',"PostController@index");
Route::get('/show',"PostController@show");


//  Route Grouping
Route::middleware(['auth'])->group(function() {
    Route::get('/follower', 'HomeController@index')->name('follower');
    Route::get('/following', 'HomeController@following')->name('following');

    Route::get('/users/list', 'Newcontroller@users');

    Route::post('/follow', 'FollowerController@follow')->name('follow');
    Route::post('/unfollow', 'FollowerController@unfollow')->name('unfollow');

});

Auth::routes();
Route::get('/home', 'Newcontroller@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/{username}','IndexController@show');




// Route::post('/post','IndexController@show')->name('post');
// This follow method is in post 



