<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/getModelsByBrand', 'ModelAutoController@getModelsByBrand')->name('getModelsByBrand');

Auth::routes();

Route::group(['prefix' => 'me', 'as' => 'account.', 'namespace' => 'Account', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('adverts', 'Adverts\AdvertController');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('adverts', 'Adverts\AdvertController');
});
