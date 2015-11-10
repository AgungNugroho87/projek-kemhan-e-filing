<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',function(){
	return view('login');
});

Route::get('admin',function(){
	return view('layouts.admin_template');
});


// Master Route
route::resource('kanminvet','kanController');
route::resource('babin','babinController');
route::resource('kabupaten','kabController');
route::resource('provinsi','provController');

// Transaction
route::resource('dokumen','docController');



