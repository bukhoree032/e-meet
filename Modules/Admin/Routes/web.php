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

Route::get('pages/news', 'NewsController@index')->name('index.news');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/pages/create-news', 'NewsController@create')->name('create.news');
    Route::post('/pages/insert-news/', 'NewsController@insert')->name('insert.news');
    Route::get('/pages/DetailNews/{id}/', 'NewsController@detail')->name('detail.news');

    Route::get('/pages/EditNews/{id}/', 'NewsController@edit')->name('edit.news');
    Route::post('/pages/updateNews/{id}/', 'NewsController@update')->name('update.news');

    Route::get('/pages/DeletNews/{id}/', 'NewsController@delet')->name('delet.news');
});

Route::get('pages/system', 'SystemController@index')->name('index.system');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/pages/create-system', 'SystemController@create')->name('create.system');
    Route::post('/pages/insert-system/', 'SystemController@insert')->name('insert.system');
});

Route::get('pages/banner', 'BannerController@index')->name('index.banner');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/pages/create-banner', 'BannerController@create')->name('create.banner');
    Route::post('/pages/insert-banner/', 'BannerController@insert')->name('insert.banner');
    Route::get('/pages/Detail-banner/{id}/', 'BannerController@detail')->name('detail.banner');

    Route::get('/pages/Edit-banner/{id}/', 'BannerController@edit')->name('edit.banner');
    Route::post('/pages/update-banner/{id}/', 'BannerController@update')->name('update.banner');

    Route::get('/pages/Delet-banner/{id}/', 'BannerController@delet')->name('delet.banner');
});