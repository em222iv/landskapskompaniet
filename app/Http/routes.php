<?php

//home
Route::get('/', ['as' => 'home', 'uses' => 'WelcomeController@index']);
Route::get('/hem', ['as' => 'home', 'uses' => 'WelcomeController@index']);
//contact
Route::get('/kontakt', ['as' => 'contact', 'uses' => 'ContactController@index']);
//about
Route::get('/landskapskompaniet', ['as' => 'about', 'uses' => 'AboutController@index']);
//gallery
Route::get('/galleri', ['as' => 'gallery', 'uses' => 'ImageController@index']);
Route::get('/galleri/{image}', [ 'uses' => 'ImageController@show','as' => 'image']);
//service
Route::get('/tjänster', ['as' => 'services', 'uses' => 'ServiceController@index']);
Route::get('/tjänster/{service}', [ 'uses' => 'ServiceController@show','as' => 'service']);


Route::post('/email', ['as' => 'email', 'uses' => 'EmailController@store']);

//admin
//Auth
Route::get('auth/register', ['middleware' => 'auth', 'as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
//admin home
Route::get('admin', ['as' => 'admin.home', 'uses' => 'Admin\HomeController@index']);
//email routes
Route::get('admin/email/create', ['as' => 'admin.email.create', 'uses' => 'Admin\AdminEmailController@create']);
Route::get('admin/email/index', ['as' => 'admin.email.index', 'uses' => 'Admin\AdminEmailController@index']);
Route::delete('admin/email/{email}', ['as' => 'admin.email.destroy', 'uses' => 'Admin\AdminEmailController@destroy']);
Route::post('admin/email', ['as' => 'admin.email', 'uses' => 'Admin\AdminEmailController@send']);
//RESTful resource routes
Route::resource('/admin/carousels', 'Admin\AdminCarouselController');
Route::resource('/admin/gallery', 'Admin\AdminImageController');
Route::resource('/admin/service', 'Admin\AdminServiceController');
Route::resource('/admin/subservice', 'Admin\AdminSubServiceController');
