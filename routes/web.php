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

Route::resource('/users/create', 'UserController');
Route::resource('/save', 'UserController@store');

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', 'ViewController@home');
});

Route::get('/', 'ViewController@home');
Route::get('/create', function () {
    return view('properties/create');
});

Route::resource('/users','UserController');
Route::resource('/properties','PropertyController');
Route::get("properties_listing",'PropertyController@listing');