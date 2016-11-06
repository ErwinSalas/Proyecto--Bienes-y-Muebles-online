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

Route::get('/', 'PropertyController@index');
Route::get('/create', function () {
    return view('properties/create');
});


Route::resource('/users','UserController');
Route::resource('/properties','PropertyController');