<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Town\TownController;
use Illuminate\Support\Facades\Route;

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


Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth:bank')->group(function () {
    Route::get('bank/dashboard', [DashboardController::class, 'bank'])->name('bank.dashboard');
    // Towns routes
    Route::get('towns', [TownController::class, 'index'])->name('town.index');
    Route::get('town/create', [TownController::class, 'create'])->name('town.create');
    Route::post('town/create', [TownController::class, 'store']);
    Route::get('town/{town}', [TownController::class, 'edit'])->name('town.edit');
    Route::post('town/{town}', [TownController::class, 'update']);
    Route::delete('town/{town}', [TownController::class, 'destroy'])->name('town.destroy');
});

require __DIR__ . '/auth.php';
