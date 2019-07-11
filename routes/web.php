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

Route::get('/','GuestController@index');
Auth::routes();
Route::group(['middleware' => ['auth','role:admin,user']], function () {
     Route::get('/home','HomeController@index')->name('home');
 });
Route::group(['middleware' => ['auth','role:admin']], function () { 
    Route::get('admin-ds','Admin\AdminDashController@index')->name('admin-home');
    //Route::resource('admin-jb','Admin\AdminJobController);
});
Route::group(['middleware' => ['auth','role:user']], function () { 
    Route::get('user-ds','User\UserDashController@index')->name('user-home');
    Route::resource('user-pr','User\UserProfileController');
});




