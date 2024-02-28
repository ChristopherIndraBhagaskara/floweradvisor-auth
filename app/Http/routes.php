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

Route::get('/', ['middleware' => 'guest', 'as' => 'login', 'uses' => 'Auth\LoginController@create']);
Route::get('login', ['middleware' => 'guest', 'as' => 'login', 'uses' => 'Auth\LoginController@create']);
Route::get('register', ['middleware' => 'guest', 'as' => 'register', 'uses' => 'Auth\RegisterController@create']);
Route::get('forgot-password', ['middleware' => 'guest', 'as' => 'password.request', 'uses' => 'Auth\PasswordController@create']);
Route::get('landing', ['middleware' => 'auth', 'as' => 'landing', 'uses' => 'HomeController@index']);

Route::post('login', 'Auth\LoginController@store');
Route::post('logout', 'Auth\LoginController@destroy');
Route::post('register', 'Auth\RegisterController@store');
Route::post('forgot-password', 'Auth\Password@store');