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
Route::get('search', 'BusinessController@search');
Route::post('follow', 'FollowController@followIt');
Route::resource('users', 'UserController');
Route::resource('questions', 'QuestionController');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// route for display user details by unique id
Route::get('user', ['as' => 'profile', 'uses' => 'UserController@index']);
Route::get('user/{id}/profile', ['as' => 'profile', 'uses' => 'UserController@profile']);
Route::get('user/{id}/photos', ['as' => 'photos', 'uses' => 'UserController@photos']);
Route::get('user/{id}/connections', ['as' => 'connections', 'uses' => 'UserController@connections']);
Route::get('user/{id}/reviews', ['as' => 'reviews', 'uses' => 'UserController@reviews']);
Route::get('user/{id}/messages', ['as' => 'messages', 'uses' => 'UserController@messages']);
Route::get('user/{id}/settings', ['as' => 'settings', 'uses' => 'UserController@settings']);
Route::get('user/{id}/our-feed', ['as' => 'ourFeed', 'uses' => 'UserController@ourFeed']);

// route for display business details by unique id
Route::get('business', ['as' => 'profile', 'uses' => 'BusinessController@index']);
Route::get('business/{id}/profile', ['as' => 'profile', 'uses' => 'BusinessController@profile']);
Route::get('business/{id}/photos', ['as' => 'photos', 'uses' => 'BusinessController@photos']);
Route::get('business/{id}/connections', ['as' => 'connections', 'uses' => 'BusinessController@connections']);
Route::get('business/{id}/reviews', ['as' => 'reviews', 'uses' => 'BusinessController@reviews']);
Route::get('business/{id}/messages', ['as' => 'messages', 'uses' => 'BusinessController@messages']);
Route::get('business/{id}/settings', ['as' => 'settings', 'uses' => 'BusinessController@settings']);
Route::get('business/{id}/our-feed', ['as' => 'ourFeed', 'uses' => 'BusinessController@ourFeed']);


//routes for loggedin user home start
Route::get('home', 'HomeController@index');
Route::get('profile', ['middleware' => 'auth', 'uses' => 'HomeController@profile']);
Route::get('photos', ['middleware' => 'auth', 'uses' => 'HomeController@photos']);
Route::get('connections', ['middleware' => 'auth', 'uses' => 'HomeController@connections']);
Route::get('reviews', ['middleware' => 'auth', 'uses' => 'HomeController@reviews']);
Route::get('messages', ['middleware' => 'auth', 'uses' => 'HomeController@messages']);
Route::get('settings', ['middleware' => 'auth', 'uses' => 'HomeController@settings']);
Route::get('our-feed', ['middleware' => 'auth', 'uses' => 'HomeController@ourFeed']);
//routes for loggedin user home end