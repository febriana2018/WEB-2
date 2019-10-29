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
    return view('base');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/base', 'DashboardController@base')->name('base');
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/chart', 'DashboardController@chart')->name('chart');
Route::get('/tabel', 'DashboardController@tabel')->name('tabel');


