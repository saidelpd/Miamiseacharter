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


Route::group(['prefix' => 'admin'], function () {
Route::get('/', ['uses' => 'Admin\AdminController@index', 'as' => 'admin.dashboard']);
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/profile', ['uses' => 'Users\UsersController@profile', 'as' => 'users.profile']);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
