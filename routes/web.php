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


Route::get('/', function () {
    return view('password.login');
});

 Route::get('login', 'AuthController@index');
 Route::post('post-login', 'AuthController@postLogin');
 Route::get('registration', 'AuthController@registration');
 Route::post('post-registration', 'AuthController@postRegistration');
 Route::get('dashboard', 'AuthController@dashboard');
 Route::get('logout', 'AuthController@logout');

// ======================== avatar ======================== //
Route::post('profile', 'HomeController@update_avatar');

// ======================== user ======================== //
Route::get('user', 'HomeController@usertotal');

// ------------------------ logscreen ------------------------ //
Route::get('logscreen', 'HomeController@logscreen')->name('logscreen');

// ------------------------ update ------------------------ //
Route::post('userUpdate', 'HomeController@userUpdate');

// ------------------------ form ------------------------ //
Route::get('viewStudent', 'StudentController@viewStudent')->name('viewStudent');
Route::post('/insertStudent', 'StudentController@insertStudent');
Route::get('reportStudent', 'StudentController@reportStudent')->name('reportStudent');
Route::post('updateStudent', 'StudentController@updateStudent')->name('updateStudent');
Route::get('deleteStudent/{id}', 'StudentController@deleteStudent')->name('deleteStudent');
Route::post('deleteStudent/{id}', 'StudentController@deleteStudent')->name('deleteStudent');
// ------------------------ form input score ------------------------ //
Route::get('inputScore', 'StudentController@inputScore')->name('inputScore');

