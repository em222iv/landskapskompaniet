<?php

//home
Route::get('/', ['as' => 'home', 'uses' => 'WelcomeController@index']);
Route::get('/hem', ['as' => 'home', 'uses' => 'WelcomeController@index']);
//contact
Route::get('/kontakt', ['as' => 'contact', 'uses' => 'ContactController@index']);
//about
Route::get('/landskapskompaniet', ['as' => 'about', 'uses' => 'AboutController@index']);
//gallery
Route::get('/galleri', ['as' => 'gallery', 'uses' => 'GalleryController@index']);
Route::get('/galleri/{image}', [ 'uses' => 'ImageController@show','as' => 'image']);
//service
Route::get('/tjänster', ['as' => 'services', 'uses' => 'ServiceController@index']);
Route::get('/tjänster/{service}', [ 'uses' => 'ServiceController@show','as' => 'service']);

//admin
//Auth
Route::get('auth/register', ['middleware' => 'auth', 'as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::get('admin', ['as' => 'admin.home', 'uses' => 'Admin\HomeController@index']);
Route::resource('/admin/carousels', 'Admin\CarouselController');
Route::resource('/admin/gallery', 'Admin\AdminGalleryController');
Route::resource('/admin/service', 'Admin\AdminServiceController');
Route::resource('/admin/subservice', 'Admin\AdminSubServiceController');
