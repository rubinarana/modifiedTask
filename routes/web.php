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
    return view('welcome');
});

Route::get('/create','Newcontroller@create')->name('create');
Route::get('/profile','Newcontroller@profile')->name('profile');
Route::get('/home','Newcontroller@index')->name('home');
Route::get('/termcondition','Newcontroller@termcondition')->name('termcondition');
Route::get('/help','Newcontroller@help')->name('help');
Route::get('/customercare','Newcontroller@customercare')->name('customercare');
Route::get('/services','Newcontroller@services')->name('services');
Route::get('/privacypolicy','Newcontroller@privacypolicy')->name('privacypolicy');

