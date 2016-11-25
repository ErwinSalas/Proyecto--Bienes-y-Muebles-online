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

Auth::routes();

Route::resource('/users/create', 'UserController');

Route::resource('/save', 'UserController@store');

Route::get('/', 'ViewController@home');

Route::get('properties_create', 'ViewController@createProperty');

Route::resource('/users','UserController');

Route::resource('/properties','PropertyController');

Route::get("properties_listing",'PropertyController@listing');

Route::post("/createComment",'CommentsController@store');

Route::get("/deleteComment/{id}",'CommentsController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index');
