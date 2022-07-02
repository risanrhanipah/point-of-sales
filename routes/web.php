<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerekController;

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


Route::resource('barangs','BarangController');
Route::resource('mereks','MerekController');
Route::resource('transaksis','TransaksiController');
Route::get('transaksi/{transaksi}/{detail}/edit', 'TransaksiController@edit')->name('transaksi.editt');
Route::resource('users','UserrController');
Route::resource('distributors','DistributorController');
Route::resource('login','LoginController');
// Route::resource('details','DetailController');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('laporan_barang','LaporanBarangController');
Route::resource('laporan_transaksi','LaporanTransaksiController');
Route::get('importExportView', 'MyController@importExportView');
Route::get('export', 'MyController@export')->name('export');
Route::post('import', 'MyController@import')->name('import');
Route::get('importExportView', 'LBController@importExportView');
Route::get('exportt', 'LBController@exportt')->name('exportt');
Route::post('importt', 'LBController@importt')->name('importt');
Route::resource('detail_transaksis', 'DetailTransaksiController');
Route::get('transaksi/pay/{id_detail}', 'DetailTransaksiController@bayar')->name('pay');
Route::PUT('transaksi/bayar/{id_detail}', 'DetailTransaksiController@setor')->name('bayar');




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




