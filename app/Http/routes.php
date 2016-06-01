<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//==================== ADMIN ====================
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'Image\ImageManageController@index');

    // Manage Image
    Route::group(['namespace' => 'Image'], function() {
        Route::resource('/image', 'ImageManageController');
        Route::post('/upload/image', 'ImageManageController@uploadImage')->name('upload.image');
    });
});
