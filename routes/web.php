<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenerimaanBarangController;
use App\Http\Controllers\PengeluaranBarangController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OrderBarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;



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

// Route untuk Barang
Route::resource('barang', BarangController::class);

// Route untuk Penerimaan Barang
Route::resource('penerimaan_barang', PenerimaanBarangController::class);

// Route untuk Pengeluaran Barang
Route::resource('pengeluaran_barang', PengeluaranBarangController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('order_barangs', OrderBarangController::class);
Route::resource('order_details', OrderDetailController::class);
Route::resource('suppliers', SupplierController::class);