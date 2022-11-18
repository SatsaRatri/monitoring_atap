<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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




Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'login'])->name('');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     Route::get('/dashboard',[DataIotController::class,'dashboard'])->name('datasensor.dashboard');
//     Route::get('/',[DataIotController::class,'dashboard'])->name('datasensor.dashboard');
//     Route::get('/sensor',[DataIotController::class,'sensor'])->name('datasensor.sensor');

// Route::get('/profil', [AdminController::class, 'profil'])->name('profil');
// Route::get('/basispengetahuan', [AdminController::class, 'basispengetahuan'])->name('basispengetahuan');
// Route::get('/basispengetahuan/tambah', [AdminController::class, 'tambahbasispengetahuan'])->name('basispengetahuan.tambahbasispengetahuan');
// Route::get('/basispengetahuan/{id_basispengetahuan}', [AdminController::class, 'editbasispengetahuan'])->name('basispengetahuan.edit');
// Route::put('/basispengetahuan/{id_basispengetahuan}', [AdminController::class, 'updatebasispengetahuan'])->name('update.basispengetahuan');
// Route::get('/basispengetahuan', [Controller::class, 'editbasispengetahuan'])->name('editbasispengetahuan');
});
