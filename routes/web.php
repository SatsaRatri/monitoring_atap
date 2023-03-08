<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataIotController;
use App\Http\Controllers\BasisPengetahuanController;
use App\Http\Controllers\AnalisisController;
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
// Route::get('/', [App\Http\Controllers\HomeController::class, 'login'])->name('');
//route / redirect ke dashboard
Route::get('/', function () {
    return redirect()->route('datasensor.dashboard');
});
Route::get('/chart', [DataIotController::class, 'ajaxSensor'])->name('datasensor.chart');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [DataIotController::class, 'dashboard'])->name('datasensor.dashboard');
    Route::get('/sensor/table', [DataIotController::class, 'tableSensor'])->name('datasensor.tabel');
    Route::get('/sensor/grafik', [DataIotController::class, 'grafikSensor'])->name('datasensor.grafik');

    Route::resource('basispengetahuan', BasisPengetahuanController::class);
    //Route::get('/analisis', [AnalisisController::class, 'analisis'])->name('analisis');
    Route::get('/profil', [AdminController::class, 'profil'])->name('profil');
    Route::put('/profil', [AdminController::class, 'updateProfil'])->name('profil.update');
    Route::get('/analisis', [AnalisisController::class, 'analisis'])->name('analisis');
    Route::get('/analisis/test', [AnalisisController::class, 'testing'])->name('test');
});
