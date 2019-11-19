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
//     return view('base');
// });

Route::get('/', function () {
    return view('Awal/welcome');
});

Route::get('/base', 'DashboardController@base')->name('base');
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/chart', 'DashboardController@chart')->name('chart');
Route::get('/tabel', 'DashboardController@tabel')->name('tabel');
Route::get('/produk', 'DashboardController@produk')->name('produk');

Route::get('/ktambah', 'DashboardController@tambahKategori')->name('tambahKategori');
Route::get('/ptambah', 'DashboardController@tambahProduk')->name('tambahProduk');

Route::resource('/kategori', 'KategoriController');
Auth::routes();
