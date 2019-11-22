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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/getModelsByBrand', 'ModelAutoController@getModelsByBrand')->name('getModelsByBrand');

Auth::routes();

Route::group(['prefix' => 'me', 'as' => 'account.', 'namespace' => 'Account', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'adverts', 'as' => 'adverts.', 'namespace' => 'Adverts'], function () {
        Route::get('/', 'AdvertController@index')->name('home');
    });
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'adverts', 'as' => 'adverts.', 'namespace' => 'Adverts'], function () {
        Route::get('/', 'AdvertController@index')->name('home');
    });
});
