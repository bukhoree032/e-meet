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



Route::get('pages/meeting', 'MeetingController@index')->name('index.meeting');

Route::prefix('manage')->name('manage.')->group(function() {
    Route::get('/pages/DetailMeeting/{id}/', 'MeetingController@Detail_meeting')->name('page.detail_meeting');

    Route::get('/pages/create-meeting', 'MeetingController@create')->name('create.meeting'); //1111111111111111111111111
    Route::post('/pages/create-insert/meeting/', 'MeetingController@CreateMeeting')->name('insert.meeting'); //2222222222222222
    Route::get('/pages/create-insert/CreateMeeting2/{id}/', 'MeetingController@CreateMeeting2')->name('create.meeting2');
    Route::post('/pages/create-insert/Meeting2/{id}/', 'MeetingController@insertMeeting2')->name('insert.meeting2');

    Route::get('/pages/EditMeeting/{id}/', 'MeetingController@PageEditMeeting')->name('edit.meeting');
    Route::post('/pages/EditMeeting/{id}/', 'MeetingController@UpdateMeeting')->name('update.meeting');
    Route::get('/pages2/EditFarme/{id}/', 'MeetingController@PageEditFarme2')->name('edit.farme2');
    Route::post('/pages/EditFarmeStep2/{id}/', 'MeetingController@EditFarmeStep2')->name('update.farme2');

    Route::get('/pages/deletmeeting/{id}/', 'MeetingController@delet')->name('delet.meeting');
});











Route::get('pages/report', 'ReportmeetingController@index')->name('index.report');

Route::prefix('manage')->name('manage.')->group(function() {
    Route::get('/pages/DetailReport/{id}/', 'ReportmeetingController@PageDetailReport')->name('page.detail_report');

    Route::get('/pages/create-report', 'ReportmeetingController@create')->name('create.report'); //1111111111111111111111111
    Route::post('/pages/create-insert/report/', 'ReportmeetingController@insert')->name('insert.report'); //2222222222222222

    Route::get('/pages/EditReport/{id}/', 'ReportmeetingController@PageEditMeeting')->name('edit.report');
    Route::post('/pages/EditFarmeStep1/{id}/', 'ReportmeetingController@EditFarmeStep1')->name('update.farme1');
    Route::get('/pages2/EditFarme/{id}/', 'ReportmeetingController@PageEditFarme2')->name('edit.farme2');
    Route::post('/pages/EditFarmeStep2/{id}/', 'ReportmeetingController@EditFarmeStep2')->name('update.farme2');

    Route::get('/pages/delet_report/{id}/', 'ReportmeetingController@delet')->name('delet.report');
});


















Route::get('pages/manage_flower', 'FlowerController@index')->name('index.flower');

Route::prefix('manage')->name('manage.')->group(function() {
    Route::get('/pages/create-flower', 'FlowerController@create')->name('create.flower');
    Route::post('/pages/create-flower/insert/', 'FlowerController@CreateFlower')->name('insert.flower');

    Route::get('/pages/EditFlower/{id}/', 'FlowerController@PageEditFlower')->name('page.edit_flower');
    Route::post('/pages/UpdateFlower/{id}/', 'FlowerController@UpdateFlower')->name('update.flower');
    
    Route::get('/pages/DetailFlower/{id}/', 'FlowerController@PageDetailFlower')->name('page.detail_flower');
});

Route::get('pages/manage_farme', 'FarmeController@index')->name('index.farme');
// manage.edit.store
Route::prefix('manage')->name('manage.')->group(function() {
    Route::get('/pages/DetailFarme/{id}/', 'FarmeController@PageDetailFarme')->name('page.detail_farme');

    Route::get('/pages/create-farme', 'FarmeController@create')->name('create.farme');
    Route::post('/pages/create-insert/Farme/', 'FarmeController@CreateFarme')->name('insert.farme');
    Route::get('/pages/create-insert/CreateFarme2/{id}/', 'FarmeController@FormFarme2')->name('create.farme2');
    Route::post('/pages/create-insert/Farme2/{id}/', 'FarmeController@CreateFarme2')->name('insert.farme2');

    Route::get('/pages/EditFarmeStep1/{id}/', 'FarmeController@PageEditFarme1')->name('edit.farme1');
    Route::post('/pages/EditFarmeStep1/{id}/', 'FarmeController@EditFarmeStep1')->name('update.farme1');
    Route::get('/pages2/EditFarme/{id}/', 'FarmeController@PageEditFarme2')->name('edit.farme2');
    Route::post('/pages/EditFarmeStep2/{id}/', 'FarmeController@EditFarmeStep2')->name('update.farme2');

    Route::get('/pages/delet/{id}/', 'FarmeController@delet')->name('delet.farme');
});

Route::get('pages/manage_store', 'StoreController@index')->name('index.store');

Route::prefix('manage')->name('manage.')->group(function() {

    Route::get('/pages/create-store/Store1/', 'StoreController@create')->name('create.store');
    Route::post('/pages/create-insert/Store2/', 'StoreController@CreateStore')->name('insert.store');
    Route::get('/pages/create-insert/CreateStore2/{id}/', 'StoreController@FormStore2')->name('create.store2');
    Route::post('/pages/create-insert/{id}/', 'StoreController@CreateStore2')->name('insert.store2');

    Route::get('/pages/EditStore/{id}/', 'StoreController@PageEditStore')->name('page.edit_store');
    Route::post('/pages/EditStoreStep1/{id}/', 'StoreController@EditStoreStep1')->name('edit.store');
    Route::get('/pages2/EditStore/{id}/', 'StoreController@Page2EditStore')->name('page2.edit_store');
    Route::post('/pages/EditStoreStep2/{id}/', 'StoreController@EditStoreStep2')->name('edit.store2');

    Route::get('/pages/delet_store/{id}/', 'StoreController@delet')->name('delet.store');

    Route::get('/pages/DetailStore/{id}/', 'StoreController@PageDetailStore')->name('page.detail_store');
});

Route::prefix('search')->name('search.')->group(function() {

    Route::post('/dis/', 'SearchController@amp')->name('amp');
    // Route::post('/pages/create-insert/Store2/', 'StoreController@CreateStore')->name('insert.store');
    // Route::post('/pages/create-insert/{id}/', 'StoreController@CreateStore2')->name('insert.store2');
});
