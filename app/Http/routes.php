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
//Route::get('/Kontakta', 'WelcomeController@contact');
Route::get('/contact', 'ContactController@index');
Route::post('/send', 'ContactController@store');

Route::get('/gallery', 'GalleryController@index');
Route::get('gallery/image', 'ImageController@index');

Route::get('/about', 'AboutController@index');
//service
Route::get('/services', 'ServiceController@index');
//subservices
Route::get('/services/trees', 'TreeController@index');
Route::get('/services/plowing', 'PlowController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//admin

Route::get('/home', 'Admin\HomeController@index');
//carousel
/*Route::get('/carousels', 'CarouselController@index');
Route::get('/carousels/create', 'CarouselController@Create');
//post
Route::post('carousels', 'CarouselController@store');*/

Route::resource('carousels', 'Admin\CarouselController');
//Route::resource('/adminContacts', 'Admin\CarouselController');

