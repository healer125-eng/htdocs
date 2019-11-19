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
    return view('welcome');
});

Route::get('/logout', function () {
	Artisan::call('cache:clear');
	return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/messages', 'MessageController@index')->name('messages');

Route::get('/bookings', 'BookingController@index')->name('bookings');

Route::get('/prices', 'PriceController@index')->name('prices');

Route::get('/contacts', 'ContactController@index')->name('contacts');

Route::get('/settings', 'SettingController@index');

Route::get('/services', 'ServiceController@index')->name('services');

Route::get('/reservations', 'ReservationController@index')->name('reservations');

Route::get('/statistics', 'StatisticController@index')->name('statistics');

Route::get('/invoices', 'InvoiceController@index')->name('invoices');

Route::get('/chat', 'ChatController@index')->name('chat');