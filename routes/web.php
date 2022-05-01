<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\APM\ApmController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\RawatJalan\Rekap;
use App\Http\Controllers\Dashboard\Home\HomeController;
use App\Http\Controllers\Dashboard\RawatJalan\Pendaftaran;

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

// Route::view('/dashboard', 'dashboard');
// Route::view('/', 'pages.auth.login');

// Auth::routes();
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/pendaftaran-rawat-jalan', [Pendaftaran::class, 'index'])->name('pendaftaran-rawat-jalan');
    Route::get('/rekap-rawat-jalan', [Rekap::class, 'index'])->name('rekap-rawat-jalan');
});

Route::get('/apm', [ApmController::class, 'index'])->name('apm');



Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/home', [HomeController::class, 'index'])->name('home');


// Penggunaan prefix group
// Route::prefix('master-data')->group(function () {
//     Route::get('/data-karyawan', [CrudController::class, 'index'])->name('dashboard');
//     Route::get('/data-kerja', [CrudController::class, 'edit'])->name('dashboard');
// });
// Route 1 : Maka pada view pemanggilannya = /master-data.data-karyawan atau route('dashboard')
// Route 2 : Maka pada view pemanggilannya = /master-data.data-kerja atau route('dashboard-edit')

// Penggunaan name group
// Route::name('master-data.')->group(function () {
//     Route::get('master-data/data-karyawan', [CrudController::class, 'index'])->name('data-karyawan');
//     Route::get('master-data/data-kerja', [CrudController::class, 'edit'])->name('data-kerja');
// });
// Route 1 : Maka pada view pemanggilannya = /master-data.data-karyawan atau route('master-data.data-karyawan')
// Route 2 : Maka pada view pemanggilannya = /master-data.data-kerja atau route('master-data.data-kerja')

// Penggunaan prefix group dan name group
// Route::name('master-data.')->prefix('master-data')->group(function () {
//     Route::get('/data-karyawan', [CrudController::class, 'index'])->name('data-karyawan');
//     Route::get('/data-kerja', [CrudController::class, 'edit'])->name('data-kerja');
// });
// Route 1 : Maka pada view pemanggilannya = /master-data.data-karyawan atau route('master-data.data-karyawan')
// Route 2 : Maka pada view pemanggilannya = /master-data.data-kerja atau route('master-data.data-kerja')
