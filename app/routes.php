<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::resource('products', 'ProductsController');

Route::resource('users', 'UsersController');

Route::get('home', 'HomeController@showHome');

Route::get('guitar', 'ProductsController@showGuitar');

Route::get('bass', 'ProductsController@showBass');

Route::get('amp', 'ProductsController@showAmp');


