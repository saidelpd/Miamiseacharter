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
    Route::match(['get','post'],'/profile', ['uses' => 'Users\UsersController@profile', 'as' => 'users.profile']);
});

Route::group(['prefix' => 'password'], function () {
    Route::get('/email', ['uses' => 'Auth\PasswordController@email', 'as' => 'password.email']);
    Route::post('/email', ['uses' => 'Auth\PasswordController@postEmail', 'as' => 'password.email']);
    Route::get('/reset/{token}', ['uses' => 'Auth\PasswordController@reset', 'as' => 'password.reset']);
    Route::post('/reset/{token}', ['uses' => 'Auth\PasswordController@postReset', 'as' => 'password.reset']);
});

Route::group(['prefix' => 'appointments'], function () {
    Route::get('/', ['uses' => 'Appointments\AppointmentsController@index', 'as' => 'appointments.index']);
    Route::get('/getJson', ['uses' => 'Appointments\AppointmentsController@getJson', 'as' => 'appointments.getJson']);
    Route::get('/create', ['uses' => 'Appointments\AppointmentsController@create', 'as' => 'appointments.create']);
    Route::post('/create', ['uses' => 'Appointments\AppointmentsController@store', 'as' => 'appointments.store']);
    Route::get('/show/{id}', ['uses' => 'Appointments\AppointmentsController@show', 'as' => 'appointments.show']);
});

Route::group(['prefix' => 'services'], function () {
    Route::post('/hours', ['uses' => 'Services\ServicesController@hours', 'as' => 'services.hours']);
});


Route::controllers([
	'auth' => 'Auth\AuthController'
]);
