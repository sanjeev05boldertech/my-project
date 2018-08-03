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

/* Route::get('/', function () {
    return view('welcome');
});
 */
 
Route::post('/store', 'UserController@store');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

/* Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin'); */

Route::group(['prefix' => 'admin',  'middleware' => 'is_admin'], function(){
	Route::get('/deshboard', 'AdminController@admin')->name('deshboard');
});

Route::group(['prefix' => 'booking',  'middleware' => 'is_admin'], function(){
	Route::get('/deshboard', 'Booking\BookingController@index')->name('deshboard');
});
/* 
Route::group(['prefix' => 'engineer',  'middleware' => 'is_admin'], function(){
	Route::get('/deshboard', 'AdminController@admin')->name('deshboard');
});

Route::group(['prefix' => 'tracking',  'middleware' => 'is_admin'], function(){
	Route::get('/deshboard', 'AdminController@admin')->name('deshboard');
}); */
