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
		});	
	});
});

Route::middleware(['auth', 'MitraRole'])->group(function(){
	Route::prefix('mitra')->group(function(){
		Route::name('mitra.')->group(function(){
			Route::get('/beranda', 'MitraController@index')->name('index');
		});
	});
});

