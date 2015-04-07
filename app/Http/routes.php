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
//welcomepage
Route::get('/home', [
    'as' => 'home', 'uses' => 'WelcomeController@index'
]);

//contact page
Route::get('/contact', [
    'as' => 'contact', 'uses' => 'ContactController@index'
]);
//about page
Route::get('/about', [
    'as' => 'about', 'uses' => 'AboutController@index'
]);


Route::post('/send', 'ContactController@store');


Route::get('/gallery',[ 'as' => 'gallery', 'uses' => 'GalleryController@index']);

Route::get('/gallery/{id}',[ 'as' => 'gallery/{id}', 'uses' => 'ImageController@show',function($id) {


    //
}]);


//service
Route::get('/services',[ 'as' => 'services', 'uses'  =>'ServiceController@index']);
//subservices
Route::get('/services/trees',[ 'as' => 'services/trees', 'uses'  => 'TreeController@index']);
Route::get('/services/plowing', [ 'as' => 'services/plowing', 'uses'  =>'PlowController@index']);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//admin


Route::get('admin', [
    'as' => 'admin/home', 'uses' => 'Admin\HomeController@index']);


//carousel
/*Route::get('/carousels', 'CarouselController@index');
Route::get('/carousels/create', 'CarouselController@Create');
//post
Route::post('carousels', 'CarouselController@store');*/

Route::resource('/admin/carousels', 'Admin\CarouselController');
//Route::resource('/adminContacts', 'Admin\CarouselController');
Route::resource('/admin/gallery', 'Admin\AdminGalleryController');
Route::resource('/admin/image', 'Admin\AdminImageController');
