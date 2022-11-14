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


Route::get('/','App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin','App\Http\Controllers\AuthController@postlogin');
Route::get('/logout','App\Http\Controllers\AuthController@logout');
Route::get('register', 'App\http\Controllers\AuthController@showFormRegister')->name('register');
Route::post('register', 'App\http\Controllers\AuthController@register');

Route::group(['middleware' => ['auth','checkRole:koordinator,laboran']],function(){
Route::get('/dashboard','App\Http\Controllers\DashboardController@index');
Route::get('/informasi','App\Http\Controllers\InformasiController@index');

// Data Obat
Route::get('/dataobat','App\Http\Controllers\DataObatController@index');
Route::post('/dataobat/create','App\Http\Controllers\DataObatController@create');
Route::get('/dataobat/{id}/edit','App\Http\Controllers\DataObatController@edit');
Route::post('/dataobat/{id}/update','App\Http\Controllers\DataObatController@update');
Route::get('/dataobat/{id}/delete','App\Http\Controllers\DataObatController@delete');
Route::get('/dataobat/exportExcel','App\Http\Controllers\DataObatController@exportExcel');
Route::get('/dataobat/exportPdf','App\Http\Controllers\DataObatController@exportPdf');

// Tindakan
Route::get('/tindakan','App\Http\Controllers\TindakanController@index');
Route::post('/tindakan/create','App\Http\Controllers\TindakanController@create');
Route::get('/tindakan/{id}/edit','App\Http\Controllers\TindakanController@edit');
Route::post('/tindakan/{id}/update','App\Http\Controllers\TindakanController@update');
Route::get('/tindakan/{id}/delete','App\Http\Controllers\TindakanController@delete');
Route::get('/tindakan/exportExcel','App\Http\Controllers\TindakanController@exportExcel');
Route::get('/tindakan/exportPdf','App\Http\Controllers\TindakanController@exportPdf');


// Transaksi
Route::get('/transaksi','App\Http\Controllers\TransaksiController@index');
Route::post('/transaksi/create','App\Http\Controllers\TransaksiController@create');
Route::get('/transaksi/{id}/edit','App\Http\Controllers\TransaksiController@edit');
Route::post('/transaksi/{id}/update','App\Http\Controllers\TransaksiController@update');
Route::get('/transaksi/{id}/delete','App\Http\Controllers\TransaksiController@delete');
Route::get('/transaksi/exportExcel','App\Http\Controllers\TransaksiController@exportExcel');
Route::get('/transaksi/exportPdf','App\Http\Controllers\TransaksiController@exportPdf');
Route::get('/tindakanget','App\Http\Controllers\TransaksiController@GetTransaksi');
Route::get('/informasi/{id}/bayar','App\Http\Controllers\TransaksiController@bayar');
Route::post('/informasi/{id}/bayarupdate','App\Http\Controllers\TransaksiController@bayarupdate');
Route::get('/laporan','App\Http\Controllers\TransaksiController@grafik');

// Data Pasien
Route::get('/pasien','App\Http\Controllers\PasienController@index');
Route::post('/pasien/create','App\Http\Controllers\PasienController@create');
Route::get('/pasien/{id}/edit','App\Http\Controllers\PasienController@edit');
Route::post('/pasien/{id}/update','App\Http\Controllers\PasienController@update');
Route::get('/pasien/{id}/delete','App\Http\Controllers\PasienController@delete');
Route::get('/pasien/{id}/profile','App\Http\Controllers\PasienController@profile');
Route::get('/pasienget','App\Http\Controllers\PasienController@GetPasien');

});

Route::group(['middleware' => ['auth','checkRole:koordinator']],function(){
Route::get('/aktivitas', 'App\http\Controllers\AktivitasController@index');
Route::get('/aktivitas/exportExcel','App\Http\Controllers\AktivitasController@exportExcel');
Route::get('/aktivitas/exportPdf','App\Http\Controllers\AktivitasController@exportPdf');
Route::get('/aktivitas/{id}/delete','App\Http\Controllers\AktivitasController@delete');
});
