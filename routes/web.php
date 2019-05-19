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



Route::get('/','HomeController@Index')->name('home.index');
Route::get('/home','HomeController@Index')->name('home.index');
Route::get('register','HomeController@registrationForm')->name('home.registrationForm')->middleware('guest');
Route::post('get-districts','HomeController@getDistricts')->name('home.getDistricts');
Route::post('verify-form','HomeController@verifyForm')->name('home.verifyForm');
Route::post('getSponsorDetails','HomeController@getSponsorDetails')->name('home.getSponsorDetails');
Route::post('register-user','HomeController@createUser')->name('home.createUser');
Route::post('register-user','HomeController@createUser')->name('home.createUser');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('admin-login', 'admin\LoginController@loginForm')->name('admin.loginForm');
Route::post('admin-login', 'admin\LoginController@authenticate')->name('admin.authenticate');

//******************* User Routes **********************//
Route::group(['prefix' => 'user', 'middleware' => ['auth', 'roles'], 'roles' => 'User'], function () {
    Route::get('dashboard', 'user\UserController@index')->name('user.dashboard');
    Route::get('view-profile', 'user\ProfileController@viewProfile')->name('profile.viewProfile');
    Route::get('sponsor-info', 'user\ProfileController@viewSponsor')->name('profile.viewSponsor');
    Route::get('user-security', 'user\ProfileController@viewSecurity')->name('profile.viewSecurity');
    Route::post('user-security', 'user\ProfileController@changeSecurity')->name('profile.changeSecurity');
    Route::get('direct-team','user\TeamController@directTeam')->name('team.directTeam');
    Route::get('total-team','user\TeamController@totalTeam')->name('team.totalTeam');
    Route::get('unused-pins','user\PinController@unusedPin')->name('pin.unusedPin');
    Route::post('get-pin-details','user\PinController@getPinDetails')->name('pin.getPinDetails');
});
//******************************************************//

//******************* Admin Routes **********************//
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'roles'], 'roles' => 'Admin'], function () {
    Route::get('dashboard', 'admin\AdminController@index')->name('admin.dashboard');
});
//******************************************************//