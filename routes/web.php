<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BagusController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\NewwController;
use App\Http\Controllers\RusakController;

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
//Profile
Route::get('/profile/{id}', [ProfileController::class, 'index']);
Route::get('/profile/edit/{id}', [ProfileController::class, 'edit']);
Route::post('/profile/update/{id}', [ProfileController::class, 'update']);
Route::get('/profile/pass/{id}', [ProfileController::class, 'pass']);
Route::post('/profile/pass/ganti/{id}', [ProfileController::class, 'ganti']);
// License
Route::get('/license', [LicenseController::class, 'index'])->name('license');
Route::get('/license/detail/{id_license}', [LicenseController::class, 'detail']);
Route::get('/license/add', [LicenseController::class, 'add']);
Route::post('/license/insert', [LicenseController::class, 'insert']);
Route::get('/license/edit/{id_license}', [LicenseController::class, 'edit']);
Route::post('/license/update/{id_license}', [LicenseController::class, 'update']);
Route::get('/license/delete/{id_license}', [LicenseController::class, 'delete']);
Route::get('/license/search', [LicenseController::class, 'search']);

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
Route::get('/users/search', [UsersController::class, 'search']);

//Barang Hardware Semua
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/barang/detail/{id_barang}', [BarangController::class, 'detail']);
Route::get('/barang/add', [BarangController::class, 'add']);
Route::post('/barang/insert', [BarangController::class, 'insert']);
Route::get('/barang/edit/{id_barang}', [BarangController::class, 'edit']);
Route::post('/barang/update/{id_barang}', [BarangController::class, 'update']);
Route::get('/barang/delete/{id_barang}', [BarangController::class, 'delete']);
Route::get('/barang/search', [BarangController::class, 'search']);
Route::post('/barang/update_status_maintenance', [BarangController::class, 'update_status_maintenance']);
Route::post('/barang/update_status_rusak', [BarangController::class, 'update_status_rusak']);
Route::post('/barang/update_status_bagus', [BarangController::class, 'update_status_bagus']);
Route::post('/barang/update_status', [BarangController::class, 'update_status']);
Route::get('/barang/export_excel', [BarangController::class,'export_excel']);
Route::get('/barang/detail/print_qr/{id_barang}', [BarangController::class,'print_qr']);

//Buku
Route::get('/barang/detailBuku/{id_buku}', [BarangController::class, 'detailBuku']);
Route::get('/barang/addBuku', [BarangController::class, 'addBuku']);
Route::post('/barang/insertBuku', [BarangController::class, 'insertBuku']);
Route::get('/barang/editBuku/{id_buku}', [BarangController::class, 'editBuku']);
Route::post('/barang/updateBuku/{id_buku}', [BarangController::class, 'updateBuku']);
Route::get('/barang/deleteBuku/{id_buku}', [BarangController::class, 'deleteBuku']);
Route::get('/barang/searchBuku', [BarangController::class, 'searchBuku']);

//Furniture
Route::get('/barang/detailFurniture/{id_furniture}', [BarangController::class, 'detailFurniture']);
Route::get('/barang/addFurniture', [BarangController::class, 'addFurniture']);
Route::post('/barang/insertFurniture', [BarangController::class, 'insertFurniture']);
Route::get('/barang/editFurniture/{id_furniture}', [BarangController::class, 'editFurniture']);
Route::post('/barang/updateFurniture/{id_furniture}', [BarangController::class, 'updateFurniture']);
Route::get('/barang/deleteFurniture/{id_furniture}', [BarangController::class, 'deleteFurniture']);
Route::get('/barang/searchFurniture', [BarangController::class, 'searchFurniture']);

//Bagus
Route::get('/bagus', [BagusController::class, 'index'])->name('barangbagus');
//Rusak
Route::get('/rusak', [RusakController::class, 'index'])->name('barangrusak');
//Maintenance
Route::get('/maintenance', [MaintenanceController::class, 'index'])->name('barangmaintenance');
//New
Route::get('/new', [NewwController::class, 'index'])->name('barangbaru');

//Transaksi
// Route::get('/pinjam', [PeminjamanController::class, 'index'])->name('pinjam');
// Route::get('/kembali', [PeminjamanController::class, 'index'])->name('kembali');
// Route::get('/waktu', [PeminjamanController::class, 'index'])->name('waktu');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
