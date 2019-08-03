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
Route::get('about','GuestController@About');
Route::get('contact','GuestController@Contact');

Auth::routes();

Route::group(['middleware' => ['auth','role:admin,user']], function () {
     Route::get('/home','HomeController@index')->name('home');
 });
Route::group(['middleware' => ['auth','role:admin']], function () { 
    Route::get('admin_dashboard','Admin\AdminDashController@index')->name('admin-home');
    Route::get('admin_status_lamaran','Admin\AdminController@daftarStatus')->name('admin_status');
    Route::get('admin_kelola_','Admin\AdminController@kelola')->name('admin_us');
    Route::post('admin_kelola_','Admin\AdminController@updateStatus')->name('admin-update-job-status');
    Route::get('admin_user_profile/{id}','Admin\AdminController@lihatProfile')->name('admin-user-profile');
    Route::resource('admin_jb','Admin\AdminJobController');
    Route::resource('admin_user_list','Admin\AdminUserController');
});
Route::group(['middleware' => ['auth','role:user']], function () { 
    Route::get('user_dashboard','User\UserDashController@index')->name('user-home');
    //route for user profile
    Route::resource('user_profile','User\UserProfileController');
    //route for show job list to apply
    Route::get('user_job_list','User\UserController@listJob')->name('user-job');
    //route for user show detail job to apply
    Route::get('user_job_to_apply/{id}','User\UserController@toApply')->name('user-jb');
    //route for user to apply job
    Route::post('user_job_to_apply/{id}','User\UserController@applyJob')->name('user-jba');
    //route for show job status
    Route::get('user_job_status/{id}','User\UserController@jobStatus')->name('user-jbs');
});




