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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('login.admin');
Route::post('admin','Admin\LoginController@login');

// surat miskin
Route::get('sku', 'SkuController@index')->name('sku');
Route::get('sku/tambah', 'SkuController@tambah')->name('sku.tambah');
Route::post('sku/simpan', 'SkuController@simpan')->name('sku.simpan');
Route::delete('sku/delete/{id}', 'SkuController@delete')->name('sku.delete');
Route::get('sku/{id}/edit', 'SkuController@edit')->name('sku.edit');
Route::patch('sku/{id}', 'SkuController@update')->name('sku.update');
Route::get('sku/lihat/{id}', 'SkuController@lihat')->name('sku.lihat');

//surat domisili
Route::get('sdomisili', 'DomisiliController@index')->name('sdomisili');
Route::get('sdomisili/tambah', 'DomisiliController@tambah')->name('sdomisili.tambah');
Route::post('sdomisili/simpan', 'DomisiliController@simpan')->name('sdomisili.simpan');
Route::delete('sdomisili/delete/{id}', 'DomisiliController@delete')->name('sdomisili.delete');
Route::get('sdomisili/{id}/edit', 'DomisiliController@edit')->name('sdomisili.edit');
Route::patch('sdomisili/{id}', 'DomisiliController@update')->name('sdomisili.update');
Route::get('sdomisili/lihat/{id}', 'DomisiliController@lihat')->name('sdomisili.lihat');

