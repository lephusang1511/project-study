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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Contact Routing
 */
Route::get('/contact', 'front\ContactController@contact');

/**
 * About Routing
 */
Route::get('/about', function(){
   return view('vn.co.hrc.shoes.front.about_a');
});


Route::get('/product','tenant\ProductController@index');

Route::get('/footer','tenant\ProductController@footer');
