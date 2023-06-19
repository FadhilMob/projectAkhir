<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RhkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/w', function () {
    return view('w');
});
Route::get('/dashboard', function () {
    return view('sb-admin.main');
});

Route::post('laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/create-pdf', [LaporanController::class, 'createPDF'])->name('create-pdf');
Route::get('/laporan/{id}/report', [LaporanController::class, 'report'])->name('report');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout')->middleware('auth');

Route::resource('rhk', RhkController::class);
Route::resource('arsip', ArsipController::class);
Route::resource('laporan', LaporanController::class);

