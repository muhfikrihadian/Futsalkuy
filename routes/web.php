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

// Route::get('/', function () {
// 	return view('welcome');
// });
Route::view('/', 'landing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'AdminRole'])->group(function(){
	Route::prefix('admin')->group(function(){
		Route::name('admin.')->group(function(){
		});
	});
});

Route::middleware(['auth', 'CustomerRole'])->group(function(){
	Route::prefix('customer')->group(function(){
		Route::name('customer.')->group(function(){
			Route::view('profile', 'Customer.profil'); /*nanti ganti route::view nya jadi route::get sama ganti Customer.profil jd controller lu*/
			Route::get('/profile', 'CustomerController@profile')->name('profile');
			Route::get('/beranda', 'CustomerController@index')->name('index');
			Route::prefix('futsal')->group(function(){
			Route::view('test', 'Customer.Futsal.mitra');
				Route::get('/mitra/{nama}', 'CustomerController@mitra')->name('mitraInfo');
				Route::get('/beranda', 'CustomerController@indexFutsal')->name('indexFutsal');
				Route::get('/lapangan/lapangan_id={id}', 'CustomerController@lapangan')->name('lapangan');
				Route::post('/bookingProses', 'CustomerController@booking')->name('bookingProses');
				Route::post('/booking', 'CustomerController@bookingData')->name('bookingData');
				Route::get('/booking', 'CustomerController@bookingPage')->name('bookingPage');
			});
		});
	});
});

Route::middleware(['auth', 'MitraRole'])->group(function(){
	Route::prefix('mitra')->group(function(){
		Route::name('mitra.')->group(function(){
			Route::get('/beranda', 'MitraController@index')->name('index');
			Route::get('/pemesanan', 'MitraController@pemesanan')->name('pemesanan');
			Route::get('/lapangan', 'MitraController@lapangan')->name('lapangan');
			Route::get('/tambahlapangan', 'MitraController@tambahLapangan')->name('tambahLapangan');
			Route::post('/tambahlapangan', 'MitraController@tambahLapanganProses')->name('tambahLapanganProses');
			Route::get('/editlapangan/{id}', 'MitraController@editLapangan')->name('editLapangan');
			Route::post('/tambahjam', 'MitraController@tambahJam')->name('tambahJam');
			Route::post('/tambahfoto', 'MitraController@tambahFoto')->name('tambahFoto');
			Route::get('/laporan', 'MitraController@laporan')->name('laporan');
			Route::get('/profile', 'MitraController@profile')->name('profile');
			Route::post('/isiprofile', 'MitraController@isiProfile')->name('isiprofile');
			Route::get('/settings', 'MitraController@settings')->name('settings');
			Route::post('/konfirmbooking', 'MitraController@konfirmBooking')->name('konfirmBooking');
		});
	});
});
