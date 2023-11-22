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


Route::get('/','Auth\LoginController@loginForm')->name('login');
Route::post('/','Auth\LoginController@loginSubmit')->name('login.submit');

Route::group(['middleware'=>'auth','prefix'=>'admin'], function(){
    Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');
    Route::post('/logout','Auth\LoginController@logout')->name('logout');

    Route::group(['as'=>'settings.','prefix'=>'settings'],function(){
        Route::get('/','System\SettingController@index')->name('index');
        Route::post('/save-settings','System\SettingController@saveSettings')->name('save');
    });

    Route::group(['as'=>'permission.','prefix'=>'permission'],function(){
        Route::get('/','System\PermissionController@index')->name('index');
        Route::get('/create','System\PermissionController@create')->name('create');
        Route::post('/','System\PermissionController@store')->name('store');
        Route::get('/{permission}/edit','System\PermissionController@edit')->name('edit');
        Route::put('/{permission}','System\PermissionController@update')->name('update');
        Route::get('/{id}','System\PermissionController@destroy')->name('destroy');
    });

    Route::group(['as'=>'role.','prefix'=>'role'],function(){
        Route::get('/','System\RoleController@index')->name('index');
        Route::get('/create','System\RoleController@create')->name('create');
        Route::post('/','System\RoleController@store')->name('store');
        Route::get('/{role}/edit','System\RoleController@edit')->name('edit');
        Route::put('/{role}','System\RoleController@update')->name('update');
        Route::get('/{id}','System\RoleController@destroy')->name('destroy');
    });

    Route::group(['as'=>'user.','prefix'=>'user'],function(){
        Route::get('/','User\UserController@index')->name('index');
        Route::get('/create','User\UserController@create')->name('create');
    });
});
