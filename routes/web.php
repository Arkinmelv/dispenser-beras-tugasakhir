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
    return redirect('login');
});

Auth::routes();

//Dashboard
Route::resource('/dashboard', 'Admin\Dashboard\DashboardController');

//Profil
Route::post('/profil/{id}', 'Admin\Profil\ProfilController@update_profil')->name('profil.update_profil');
Route::resource('/profil', 'Admin\Profil\ProfilController');

//Dashboard
Route::resource('/data-penyimpanan', 'Admin\Datapenyimpanan\DatapenyimpananController');

//Kasir
Route::get('/admin-kasir/listantrian', 'Admin\Kasir\KasirController@listantrian')->name('admin-kasir.list');
Route::resource('/admin-kasir', 'Admin\Kasir\KasirController');

//Laporan
Route::get('/laporan/laporan_pembelian', 'Admin\Laporan\LaporanController@listpembelian')->name('laporan.list');
Route::resource('/laporan', 'Admin\Laporan\LaporanController');

Route::get('/firebase', 'FirebaseController@index');
