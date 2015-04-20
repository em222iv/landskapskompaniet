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
Route::get('/', [
    'as' => 'home', 'uses' => 'WelcomeController@index'
]);

Route::get('/hem', [
    'as' => 'home', 'uses' => 'WelcomeController@index'
]);
//contact page
Route::get('/kontakt', [
    'as' => 'contact', 'uses' => 'ContactController@index'
]);
//about page
Route::get('/landskapskompaniet', [
    'as' => 'about', 'uses' => 'AboutController@index'
]);

Route::get('/galleri',[ 'as' => 'gallery', 'uses' => 'GalleryController@index']);

Route::get('/galleri/{id}',[ 'as' => 'gallery/{id}', 'uses' => 'ImageController@show',function($name) {



}]);


//service
Route::get('/tjänster',[ 'as' => 'services', 'uses'  =>'ServiceController@index']);
//subservices
/*Route::get('/service/{name}',[ 'as' => 'service/{id}', 'uses' => 'ServiceController@show',function($name = null)
{

}]);*/
Route::get('tjänster/{name?}',[ 'as' => 'service/{name}', 'uses' => 'ServiceController@show', function($name = null)
{
    return $name;
}]);

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
Route::resource('/admin/service', 'Admin\AdminServiceController');
