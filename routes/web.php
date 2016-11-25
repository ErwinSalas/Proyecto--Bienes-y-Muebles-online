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

<<<<<<< HEAD
Auth::routes();

Route::resource('/users/create', 'UserController');

Route::resource('/save', 'UserController@store');

Route::get('/', 'ViewController@home');

Route::get('properties_create', 'ViewController@createProperty');
=======
Route::resource('/users/create', 'UserController');
Route::resource('/save', 'UserController@store');

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', 'ViewController@home');
});

Route::get('/', 'ViewController@home');
Route::get('properties_create', 'ViewController@createProperty');

>>>>>>> 584e885858a9c4456521d0a09eb34caa7770fe57

Route::resource('/users','UserController');

Route::resource('/properties','PropertyController');

Route::get("properties_listing",'PropertyController@listing');
<<<<<<< HEAD

Route::post("/createComment",'CommentsController@store');

Route::get("/deleteComment/{id}",'CommentsController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index');
=======
>>>>>>> 584e885858a9c4456521d0a09eb34caa7770fe57
