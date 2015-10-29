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

Route::get('/', 'AuthController@redirectToGoogle');

Route::get('home', 'HomeController@index');

Route::get('auth/google/login', 'AuthController@redirectToGoogle');

Route::get('auth/google/callback', 'AuthController@handleGoogleCallback');

Route::get('auth/flickr/login', 'AuthController@redirectToFlickr');

Route::get('auth/flickr/callback', 'AuthController@handleFlickrCallback');

/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/