<?php

use Illuminate\Support\Facades\Route;

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
// dd(\Hash::make('express2021@'));
// paasowrd: admin@goexpressalliance.com
Route::group(['namespace'=>'App\Http\Controllers'], function(){
    Route::get('/', 'SiteController@index')->name('home');
    Route::get('tracker', 'SiteController@trackerForm')->name('tracker');
    Route::post('result', 'SiteController@trackerResult')->name('result');
    Route::get('login', 'DashboardController@login')->name('login');
    Route::post('login', 'DashboardController@loginUser');
    Route::group(['auth:web', 'prefix'=>'admin'], function(){
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('create-parcel', 'DashboardController@createParcel')->name('create');
        Route::post('create-parcel', 'DashboardController@storeParcel');
        Route::get('edit-parcel/{id}', 'DashboardController@editParcel')->name('edit');
        Route::post('edit-parcel/{id}', 'DashboardController@updateParcel');
        Route::get('logout', 'DashboardController@logout')->name('logout');
    });
});

