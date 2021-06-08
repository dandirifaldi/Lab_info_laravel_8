<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ReportController;

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
Route::get('/users', [UsersController::class, 'index']);
