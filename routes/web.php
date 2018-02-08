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
	Auth::logout();
	Auth::loginUsingId(3);
	$jobs = App\Job::all();
    return view('welcome', compact('jobs'));
});


Route::resource('jobs', 'JobsController');