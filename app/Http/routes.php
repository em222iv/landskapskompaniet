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
Route::get('/Kontakta', 'WelcomeController@contact');
Route::get('/Kontakta', 'ContactController@index');
Route::get('/Hem', 'HomeController@index');
Route::get('/landskapskompaniet', 'AboutController@index');
//service
Route::get('/tjanster', 'ServiceController@index');
//subservices
Route::get('/tjanster/trad', 'TreeController@index');
Route::get('/tjanster/plogning', 'PlowController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
