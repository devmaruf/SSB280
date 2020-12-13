<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Front End Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/*
|--------------------------------------------------------------------------
| Back End Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function(){
	//Dashboard Route
	Route::get('/dashboard','App\Http\Controllers\Backend\Pagescontroller@index')->name('dashboard');
	
	//Brand Route
	Route::group(['prefix' => 'brand'], function(){
		//Dashboard Route
		Route::get('/manage','App\Http\Controllers\Backend\BrandController@index')->name('brand.manage');
		Route::get('/create','App\Http\Controllers\Backend\BrandController@create')->name('brand.create');
		Route::post('/store','App\Http\Controllers\Backend\BrandController@store')->name('brand.store');
		Route::get('/edit/{id}','App\Http\Controllers\Backend\BrandController@edit')->name('brand.edit');
		Route::post('/update/{id}','App\Http\Controllers\Backend\BrandController@update')->name('brand.update');
		Route::get('/delete/{id}','App\Http\Controllers\Backend\BrandController@destroy')->name('brand.destroy');
	});
});


