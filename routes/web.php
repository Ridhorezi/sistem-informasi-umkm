<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\UsahaController;
use App\Http\Controllers\UserController;


use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Halaman Utama
Route::get('/', [UMKMController::class, 'index'])->withoutMiddleware('auth')->name('umkm');

// Halaman Registrasi
Route::get('/registrasi', [UMKMController::class, 'registrasi'])->withoutMiddleware('auth')->name('registrasi');

// Halaman About
Route::get('/about', [UMKMController::class, 'about'])->withoutMiddleware('auth')->name('about');

// Halaman Contact
Route::get('/contact', [UMKMController::class, 'contact'])->withoutMiddleware('auth')->name('contact');

// Method tambah umkm
Route::post('/tambah-umkm-user', [UMKMController::class, 'tambahUmkm'])->withoutMiddleware(['auth'])->name('tambahUmkmUser');

// Authentication
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Admin dan Pimpinan
Route::middleware(['auth', 'role:admin,pimpinan'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Pemilik
    Route::get('/data-pemilik', [PemilikController::class, 'index'])->name('dataPemilik');
    Route::post('/data-pemilik/hapus/{id}', [PemilikController::class , 'destroy'])->name('hapusPemilik');
    Route::get('/data-pemilik/edit/{id}', [PemilikController::class , 'edit'])->name('editPemilik');
    Route::post('/data-pemilik/edit/{id}', [PemilikController::class , 'update'])->name('editPemilik');

    // Add data umkm
    Route::get('/tambah-data-umkm', [UMKMController::class, 'create']);
    Route::post('/tambah-data-umkm', [UMKMController::class, 'store']);

    // Usaha
    Route::get('/data-usaha', [UsahaController::class, 'index'])->name('dataUsaha');
    Route::get('/data-usaha/detail/{id}', [UsahaController::class, 'detailDataUsaha'])->name('detailUsaha');
    Route::post('/data-usaha/hapus/{id}', [UsahaController::class, 'destroy'])->name('hapusUsaha');
    Route::get('/data-usaha/edit/{id}', [UsahaController::class, 'edit'])->name('editUsaha');
    Route::post('/data-usaha/edit/{id}', [UsahaController::class, 'update'])->name('editUsaha');

    // Download
    Route::get('/data-download-umkm', [UMKMController::class, 'downloadUMKM'])->name('dataDownloadUMKM');
    Route::get('/data-umkm', [UMKMController::class, 'exportToExcel'])->name('dataUMKM');

    // Get Data Pemilik
    Route::get('/umkm/data-pendaftar', [UMKMController::class, 'getDataPemilik']);

    // Get Data Analytic
    Route::get('/umkm/data-analytic', [UMKMController::class, 'getDataAnalytic']);

    // Get Data Analytic
    Route::get('/umkm/data-combined', [UMKMController::class, 'getCombinedData']);

    // Profile Setting
    // Route::get('/data-profile/edit/{id}', [ProfileController::class, 'edit'])->name('editProfile');
    // Route::get('/data-profile/edit/{id}', [ProfileController::class, 'update'])->name('editProfile');
});

// Pimpinan
Route::middleware(['auth', 'role:pimpinan'])->group(function () {

    Route::get('/data-user', [UserController::class, 'index'])->name('dataUser');
    Route::get('/tambah-data-user', [UserController::class, 'create']);
    Route::post('/tambah-data-user', [UserController::class, 'store']);
    Route::get('/data-user/edit/{id}', [UserController::class, 'edit'])->name('editUser');
    Route::post('/data-user/edit/{id}', [UserController::class, 'update'])->name('editUser');
    Route::post('/data-user/hapus/{id}', [UserController::class, 'destroy'])->name('hapusUser');

});