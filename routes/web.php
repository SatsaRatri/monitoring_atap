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

// Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
// Route::get('/', function () {
//     return view('admin.profil');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');
