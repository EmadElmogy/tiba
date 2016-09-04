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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/all','WS@test');
Route::get('/admin',function(){
  return redirect()->route('login');
});
Route::get('auth/logout', 'Auth\AuthController@logout')->name('logout');
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login','userController@showlogin')->name('login');
  Route::post('/login','userController@dologin')->name('do_login');
  Route::get('/home','userController@index')->name('home');
  Route::resource('/slider','sliderController');
  Route::resource('/service','serviceController');
  Route::resource('/solution','solutionController');
  Route::resource('/about','aboutController');
  Route::get('/partner/addProduct/{id}','partnerController@addproduct');
  Route::post('/partner/addProduct','partnerController@add_product')->name('add_product');
  Route::get('/partner/deleteProduct/{id}','partnerController@deleteProduct')->name('deleteProduct');
  Route::get('/partner/product/{id}','partnerController@showproducts');
  Route::resource('/contact','contactController');
  // Route::get('/contact/destroy/{id}','contactController@destroy')->name('destroy');
  Route::resource('/partner','partnerController');
  Route::resource('/converter','converterController');
  Route::resource('/crop','cropController');
  Route::resource('/news','newsController');
  Route::resource('/cats','catsController');
  Route::resource('/techs','techsController');
  Route::resource('/product','productController');

});

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::get('/','homeController@index');
Route::get('/partner/{id}','homeController@get_partner');
Route::get('/service','homeController@get_service');
Route::get('/service/{id}','homeController@get_service_details');
Route::get('/crops','homeController@get_crop');
Route::get('/crop/{id}','homeController@get_crop_details');
Route::get('/search','homeController@search');
Route::get('/converter','homeController@get_converter');
Route::get('/solution','homeController@get_solution');
Route::get('/solution/{id}','homeController@get_solution_details');
Route::get('/news/{id}','homeController@get_news');
Route::get('/categories','homeController@get_cats');
Route::get('/allNews','homeController@get_all_news')->name('more_news');
Route::get('/tech/{id}','homeController@show_tech');
Route::get('/product/{id}','homeController@get_products');
Route::get('/contact','homeController@show_contact');
Route::post('/contact','homeController@do_contact')->name('contact');
Route::post('/subscribe','homeController@subscribe')->name('subscribe');
