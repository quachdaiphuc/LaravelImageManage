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
    //Login
    Route::get('/login', ['as' => 'login', 'uses' => 'Auth\AuthController@showLogin']);
    //Do login
    Route::post('/login', ['as' => 'do.login', 'uses' => 'Auth\AuthController@doLogin']);
    //Logout
    Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@doLogout']);

    Route::group( ['middleware' => 'auth'], function() {
        Route::get('/', 'Image\ImageManageController@create')->name('admin.top');
        // Manage Image
        Route::group(['namespace' => 'Image'], function() {
            Route::get('/image', 'ImageManageController@index')->name('image.index');
            Route::get('/image/create', 'ImageManageController@create')->name('image.create');
            Route::post('/upload/image', 'ImageManageController@uploadImage')->name('upload.image');
            Route::post('/change/image', 'ImageManageController@changeImageName');
            Route::post('/deleteImage', 'ImageManageController@deleteImage');
        });
    });

});
