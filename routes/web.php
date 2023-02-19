<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashobardController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['guest:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/login', [LoginController::class, 'index'])->name('admin.auth.login');
        Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
    });
});


Route::middleware(['auth:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashobardController::class, 'index'])->name('admin.dashboard');
    });
});
