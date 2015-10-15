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

<<<<<<< HEAD
Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('products', 'ProductsController');

Route::resource('users', 'UsersController');
=======
// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', function()
{
	return View::make('home');
});
>>>>>>> 6188d4ccc220b32b957d66257c2b0c314359ec35
