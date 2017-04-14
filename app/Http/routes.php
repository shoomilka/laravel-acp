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
Route::get('traces', 'WelcomeController@traces');
Route::get('results/{id}', 'WelcomeController@trace');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('trace', 'TraceController');
Route::resource('target', 'TargetController');
Route::resource('email', 'EmailController');
Route::resource('member', 'MemberController');
Route::resource('check', 'CheckController');