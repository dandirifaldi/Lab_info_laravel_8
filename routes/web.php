<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;

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
//Dashboard
Route::get('/', [HomeController::class, 'index']);
Route::get('/profile/{id}', [ProfileController::class, 'index']);
// License
Route::get('/license', [LicenseController::class, 'index'])->name('license');
Route::get('/license/detail/{id_license}', [LicenseController::class, 'detail']);
Route::get('/license/add', [LicenseController::class, 'add']);
Route::post('/license/insert', [LicenseController::class, 'insert']);
Route::get('/license/edit/{id_license}', [LicenseController::class, 'edit']);
Route::post('/license/update/{id_license}', [LicenseController::class, 'update']);
Route::get('/license/delete/{id_license}', [LicenseController::class, 'delete']);

//Report
Route::get('/report', [ReportController::class, 'index']);
//Users
Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/users/detail/{id}', [UsersController::class, 'detail']);
Route::get('/users/add', [UsersController::class, 'add']);
Route::post('/users/insert', [UsersController::class, 'insert']);
Route::get('/users/edit/{id}', [UsersController::class, 'edit']);
Route::post('/users/update/{id}', [UsersController::class, 'update']);
Route::get('/users/delete/{id}', [UsersController::class, 'delete']);

//Barang Hardware Semua
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/barang/detail/{id_barang}', [BarangController::class, 'detail']);
Route::get('/barang/add', [BarangController::class, 'add']);
Route::post('/barang/insert', [BarangController::class, 'insert']);
Route::get('/barang/edit/{id_barang}', [BarangController::class, 'edit']);
Route::post('/barang/update/{id_barang}', [BarangController::class, 'update']);
Route::get('/barang/delete/{id_barang}', [BarangController::class, 'delete']);
//Buku
// Route::get('/barang', [BarangController::class, 'index_buku'])->name('buku');
// Route::get('/barang/detail/{id}', [BarangController::class, 'detail']);
// Route::get('/barang/add', [BarangController::class, 'add']);
// Route::post('/barang/insert', [BarangController::class, 'insert']);
// Route::get('/barang/edit/{id_barang}', [BarangController::class, 'edit']);
// Route::post('/barang/update/{id_barang}', [BarangController::class, 'update']);
// Route::get('/barang/delete/{id_barang}', [BarangController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
