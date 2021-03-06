<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){

	Route::get('deshboard','deshboardController@index')->name('admin.dehsboard');

	Route::resource('slider','sliderController');
	Route::resource('category','categoryController');
	Route::resource('item','itemController');

});

