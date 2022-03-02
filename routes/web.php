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

Route::group(['prefix' => 'room'], function(){
    route::get('reguler', 'RegulerController@index')->name('reguler');
});

Route::group(['prefix' => 'room'], function(){
    route::get('premium', 'PremiumController@index')->name('premium');
});

route::get('start-book', 'StartBookController@index')->name('booking');