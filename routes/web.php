<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
 //   return view('welcome');
//
Route::get('/', [DashboardController::class, 'index']);
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dokter', [DokterController::class, 'index']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
