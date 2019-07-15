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
    Route::get('admin_update_status','Admin\AdminController@kelola')->name('admin-us');
    Route::get('admin_update_status/{id}','Admin\AdminController@lihatProfile')->name('admin-user-profile');
    Route::get('admin_update_job_status/{id}','Admin\AdminController@lihatStatus')->name('admin-job-status');
    Route::resource('admin-jb','Admin\AdminJobController');
});
Route::group(['middleware' => ['auth','role:user']], function () { 
    Route::get('user-ds','User\UserDashController@index')->name('user-home');
    Route::resource('user-pr','User\UserProfileController');
    //route for show job list to apply
    Route::get('user-jb','User\UserController@listJob')->name('user-job');
    Route::get('user-jb/{id}','User\UserController@toApply')->name('user-jb');
    Route::post('user-jb/{id}','User\UserController@applyJob')->name('user-jba');
    Route::get('user-jb/{id}','User\UserController@jobStatus')->name('user-jbs');
});




