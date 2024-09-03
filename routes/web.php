<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::name('user.')->group(function () {
    Auth::routes();

    Route::middleware('auth')->group(function () {




        Route::get('/', 'IndexController@index')->name('index');



















        // ////////////////////////////////////////////////////////////////////////////////////////
        Route::post('/continueJourney', 'EventController@continueJourney')->name('continueJourney');

        Route::get('/Contract/index', 'HomeController@ContractIndex')->name('ContractIndex');
        Route::get('/profile/index', 'ProfileController@index')->name('profile.index');
        Route::get('/profile', 'ProfileController@edit')->name('profile.edit');
        Route::put('/profile', 'ProfileController@update')->name('profile.update');
        Route::delete('/profile', 'ProfileController@destroy')->name('profile.destroy');

        Route::post('/notification/read', 'ProfileController@markNotificationAsRead')->name('mark.notification.read');
        Route::get('/notification/list', 'ProfileController@notificationlist')->name('notification.list');


        //menu
        
        Route::get('/menu/items/{eventId?}', 'menu@items')->name('custom.menu');
        Route::post('/menu/submit', 'menu@submit')->name('menu.submit');
        Route::get('/getNewDishes', 'menu@getNewDishes')->name('menu.getNewDishes');
        Route::post('/getDishes', 'menu@getDishes')->name('menu.getDishes');
        Route::get('/menu/edit/request/{eventId?}', 'menu@menu_edit_request')->name('events.menu.edit.request');
        Route::get('/menu/edit/{eventId?}', 'menu@menu_edit')->name('events.menu.edit');
        Route::post('/menu/query', 'menu@menu_query')->name('submit.menu.query');
        Route::post('/menu/acceptDishChange', 'menu@acceptDishChange')->name('menu.acceptDishChange');



        Route::get('/menu/addon/{eventId?}', 'menu@addon')->name('menu.addon');
        Route::get('/menu/detail/{id}/{eventId?}', 'menu@detail')->name('menu.detail');

        Route::get('/equipment/{eventId?}', 'menu@equipment')->name('equipment.index');
        Route::get('/menu/{id?}', 'menu@index')->name('menu.index');


        //Events
        Route::get('/calender/{type?}', 'EventController@calender')->name('calender.index');

        Route::get('/events', 'EventController@index')->name('events.index');
        Route::get('/events-create', 'EventController@create')->name('events.create');
        Route::post('/events', 'EventController@store')->name('events.store');
        Route::get('/events/invoice/show/{id}', 'EventController@invoice')->name('events.invoice.show');
        Route::get('/events/invoice/print/{id}', 'EventController@print_invoice')->name('event.print.invoice');

        Route::get('/service/styling/{eventId?}', 'ServiceController@create')->name('service.styling');
        Route::get('/edit/service/{serviceid}', 'ServiceController@edit')->name('service.styling.edit');
        Route::post('/service/styling', 'ServiceController@store')->name('service.store');
        Route::post('/update/service', 'ServiceController@update')->name('service.update');

        Route::get('/events/show/{id}', 'EventController@show')->name('events.show');

        Route::get('/events/edit/{id}', 'EventController@edit')->name('events.edit');

        Route::put('/events', 'EventController@update')->name('events.update');

        Route::delete('/events/{event}', 'EventController@destroy')->name('events.destroy');

        //customer venue

        Route::get('/customer-venues', 'CustomerVenueController@index')->name('customer-venues.index');
        Route::get('/customer-venues-create', 'CustomerVenueController@create')->name('customer-venues.create');
        Route::get('/customer-venues-create/{id?}', 'CustomerVenueController@create')->name('customer-venues.createWithId');
        Route::post('/customer-venues', 'CustomerVenueController@store')->name('customer-venues.store');
        Route::get('/event/venues/edit/{id}', 'CustomerVenueController@edit')->name('customer-venues.edit');
        Route::put('/customer-venues', 'CustomerVenueController@update')->name('customer-venues.update');
        Route::delete('/customer-venues/{customerVenue}', 'CustomerVenueController@destroy')->name('customer-venues.destroy');


        //password
        Route::get('/change-password', 'PasswordChangeController@showChangePasswordForm')->name('passwordChange');
        Route::post('/changePassword', 'PasswordChangeController@changePassword')->name('password.change');

        // Route::group(['prefix' => 'items'], function () {
        //     Route::get('/','ItemController@index')->name('items.index');
        //     Route::get('/add','ItemController@create')->name('items.create');
        //     Route::post('/','ItemController@store')->name('items.store');
        //     Route::get('/{item}','ItemController@edit')->name('items.edit');
        //     Route::put('/{item}','ItemController@update')->name('items.update');
        //     Route::delete('/{item}','ItemController@destroy')->name('items.destroy');
        // });
        // Other routes
        Route::get('/dashboard', 'IndexController@index')->name('dashboard');
        Route::get('/profile', 'UserController@profile')->name('profile');
        // Route::get('/profile', 'UserController@edit')->name('profile.edit');
        Route::patch('/profile', 'UserController@update')->name('profile.update');
        Route::get('/edit-profile', 'UserController@edit')->name('profile.edit');
        Route::put('/update', 'UserController@update')->name('profile.update');


        Route::get('/occasions', 'OccasionController@index')->name('occasions.index');
        Route::get('/occasions/create', 'OccasionController@create')->name('occasions.create');
        Route::post('/occasions', 'OccasionController@store')->name('occasions.store');
        Route::get('/occasions/{id}/edit', 'OccasionController@edit')->name('occasions.edit');
        Route::put('/occasions/{id}', 'OccasionController@update')->name('occasions.update');
        Route::delete('/occasions/{id}', 'OccasionController@destroy')->name('occasions.destroy');
        //types
        Route::get('/types', 'TypeController@index')->name('types.index');
        Route::get('/types/create', 'TypeController@create')->name('types.create');
        Route::post('/types', 'TypeController@store')->name('types.store');
        Route::get('/types/{id}/edit', 'TypeController@edit')->name('types.edit');
        Route::put('/types/{id}', 'TypeController@update')->name('types.update');
        Route::delete('/types/{id}', 'TypeController@destroy')->name('types.destroy');

        //admin vanue
        Route::get('/menus', 'PackagesController@menuLinks')->name('menu.link.index');


        Route::get('/admin-venues', 'AdminVenueController@index')->name('admin-venues.index');
        Route::get('/admin-venues/create', 'AdminVenueController@create')->name('admin-venues.create');
        Route::post('/admin-venues', 'AdminVenueController@store')->name('admin-venues.store');
        Route::get('/admin-venues/{adminVenue}', 'AdminVenueController@show')->name('admin-venues.show');
        Route::get('/admin-venues/{adminVenue}/edit', 'AdminVenueController@edit')->name('admin-venues.edit');
        Route::put('/admin-venues/{adminVenue}', 'AdminVenueController@update')->name('admin-venues.update');
        Route::delete('/admin-venues/{adminVenue}', 'AdminVenueController@destroy')->name('admin-venues.destroy');

        Route::resource('contact', 'UserController@index')->names('contact');

        Route::resource('packages', 'PackagesController@index');
        Route::resource('items', 'DishesController@index')->names('dishes');
        Route::resource('categories', 'CategoriesController@index');
        Route::resource('subcategories', 'SubCategoriesController@index');
        Route::resource('equipments', 'EquipmentController@index');
        Route::resource('labours', 'LabourController@index');
    });
    Route::get('/{slug}', 'IndexController@slug')->name('page');
});
