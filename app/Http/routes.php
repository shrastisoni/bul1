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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::post('follow', 'FollowController@followIt');
Route::resource('users', 'UserController');
Route::resource('questions', 'QuestionController');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// route for display business details by unique id
Route::get('business/{id}/profile', ['as' => 'profile', 'uses' => 'BusinessController@profile']);
Route::get('business/{id}/photos', ['as' => 'profile', 'uses' => 'BusinessController@photos']);
Route::get('business/{id}/connections', ['as' => 'profile', 'uses' => 'BusinessController@connections']);
Route::get('business/{id}/reviews', ['as' => 'profile', 'uses' => 'BusinessController@reviews']);
Route::get('business/{id}/messages', ['as' => 'profile', 'uses' => 'BusinessController@messages']);
Route::get('business/{id}/settings', ['as' => 'profile', 'uses' => 'BusinessController@settings']);
Route::get('business/{id}/our-feed', ['as' => 'profile', 'uses' => 'BusinessController@ourFeed']);

// $url = route('profile', ['id' => 1]);

//routes for loggedin user home start
Route::get('profile', ['middleware' => 'auth', 'uses' => 'HomeController@profile']);
Route::get('photos', ['middleware' => 'auth', 'uses' => 'HomeController@photos']);
Route::get('connections', ['middleware' => 'auth', 'uses' => 'HomeController@connections']);
Route::get('reviews', ['middleware' => 'auth', 'uses' => 'HomeController@reviews']);
Route::get('messages', ['middleware' => 'auth', 'uses' => 'HomeController@messages']);
Route::get('settings', ['middleware' => 'auth', 'uses' => 'HomeController@settings']);
Route::get('our-feed', ['middleware' => 'auth', 'uses' => 'HomeController@ourFeed']);
//routes for loggedin user home end