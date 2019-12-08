<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/getModelsByBrand', 'ModelAutoController@handle')->name('getModelsByBrand');
Route::get('/getGenerationByModel', 'AutoGenerationController@handle')->name('getGenerationByModel');
Route::get('/getCitiesByRegion', 'CityController@handle')->name('getCitiesByRegion');
Route::post('/advertImage', 'AdvertImageController@index')->name('advertImage');

Auth::routes();

// Adverts
Route::get('advert/{advert_id}/', 'Adverts\AdvertController@handler')->name('advert');
Route::get('adverts/{brand_id?}/{model_id?}', 'Adverts\ListController@handler')->name('adverts');

// Account
Route::group(['prefix' => 'me', 'as' => 'account.', 'namespace' => 'Account', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('adverts', 'Adverts\AdvertController');
});

// Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('adverts', 'Adverts\AdvertController');
});
