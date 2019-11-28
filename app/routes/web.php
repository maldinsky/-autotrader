<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/getModelsByBrand', 'ModelAutoController@handle')->name('getModelsByBrand');
Route::get('/getCitiesByRegion', 'CityController@handle')->name('getCitiesByRegion');
Route::post('/advertImage', 'AdvertImageController@index')->name('advertImage');

Auth::routes();

Route::group(['prefix' => 'me', 'as' => 'account.', 'namespace' => 'Account', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('adverts', 'Adverts\AdvertController');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('adverts', 'Adverts\AdvertController');
});
