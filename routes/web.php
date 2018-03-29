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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/createAd', 'AdvertisementController@create')->name('create');
Route::post('new-ad', array('uses' => 'AdvertisementController@store'));

Auth::routes();


Route::post('/profile', 'UserController@profile')->name('profile');
Route::any('/profile', 'UserController@update_avatar')->name('profile');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
