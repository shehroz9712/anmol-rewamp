<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {

    /*authentication*/
    Route::group(['namespace' => 'Auth', 'prefix' => 'auth', 'as' => 'auth.'], function () {
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login')->name('doLogin');
        Route::get('logout', 'LoginController@logout')->name('logout');
    });

    Route::middleware('auth.admin')->group(function () {

        // Other routes
        Route::get('/dashboard', 'IndexController@index')->name('dashboard');
        Route::get('/', 'IndexController@index')->name('home');
        Route::get('/contacts', 'IndexController@contacts')->name('contacts.index');
        Route::get('/home', 'IndexController@index')->name('home');
        Route::get('/profile', 'UserController@edit')->name('profile.edit');
        Route::get('/settings', 'SettingController@index')->name('settings.index');
        Route::post('/settings', 'SettingController@update')->name('settings.update');
        Route::get('/change/status/{id}/{status?}', 'ImagePixelsController@change_status')->name('pixels.change.status');

        Route::patch('/profile', 'UserController@update')->name('profile.update');
        Route::get('/edit-profile', 'UserController@edit_profile')->name('edit');
        Route::put('/update', 'UserController@update')->name('update');
        
        Route::resource('pages', 'PageController');
        Route::resource('users', 'UserController');;
        Route::resource('admins', 'AdminController');
    });
});
