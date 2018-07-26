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




Route::resource('posts', 'PostController');

Auth::routes();

Route::post('pay', 'PaymentController@payWithPaypal')->name('pay');

Route::get('cancel', 'PaymentController@cancel')->name('cancel');
Route::get('paynow', 'PaymentController@paynow')->name('paynow');

Route::get('/', 'PostController@index');

Route::get('home', 'HomeController@index')->name('home');

Route::get('/test', 'HomeController@test')->name('test');

Auth::routes();


