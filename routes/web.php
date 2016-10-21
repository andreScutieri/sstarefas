<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Home
Route::get('/', 'HomeController@index')->name('home');

// Routes and Tasks

Route::resource('project', 'ProjectController');
Route::resource('task', 'TaskController');

// Users

Route::get('user/calendar', 'UserController@calendar');
Route::get('user/report', 'UserController@report');
Route::resource('user', 'UserController');

// Auth

Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index');
