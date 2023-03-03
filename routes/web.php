<?php

use App\Http\Controllers\Agency\AgencyController;
use App\Http\Controllers\Bank\BankPassword;
use App\Http\Controllers\Bank\BankProfile;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Contribution\ContributionController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Town\TownController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserController;
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
    // Client routes
    Route::get('clients', [ClientController::class, 'index'])->name('client.index');
    Route::get('client/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('client/create', [ClientController::class, 'store']);
    Route::get('client/{client}', [ClientController::class, 'edit'])->name('client.edit');
    Route::post('client/{client}', [ClientController::class, 'update']);

    // Contributions routes
    Route::get('contributions', [ContributionController::class, 'index'])->name('contribution.index');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth:bank')->group(function () {
    Route::get('bank/dashboard', [DashboardController::class, 'bank'])->name('bank.dashboard');
    // Towns routes
    Route::get('bank/towns', [TownController::class, 'index'])->name('town.index');
    Route::get('bank/town/create', [TownController::class, 'create'])->name('town.create');
    Route::post('bank/town/create', [TownController::class, 'store']);
    Route::get('bank/town/{town}', [TownController::class, 'edit'])->name('town.edit');
    Route::post('bank/town/{town}', [TownController::class, 'update']);
    Route::delete('bank/town/{town}', [TownController::class, 'destroy'])->name('town.destroy');

    // Agency routes
    Route::get('bank/agencies', [AgencyController::class, 'index'])->name('agency.index');
    Route::get('bank/agency/create', [AgencyController::class, 'create'])->name('agency.create');
    Route::post('bank/agency/create', [AgencyController::class, 'store']);
    Route::get('bank/agency/{agency}', [AgencyController::class, 'edit'])->name('agency.edit');
    Route::post('bank/agency/{agency}', [AgencyController::class, 'update']);
    Route::delete('bank/agency/{agency}', [AgencyController::class, 'destroy'])->name('agency.destroy');

    // Profile routes
    Route::get('bank/profile', [BankProfile::class, 'edit'])->name('bank.profile');
    Route::patch('bank/profile', [BankProfile::class, 'update']);
    Route::put('bank/profile', [BankPassword::class, 'update'])->name('bank.password.update');

    // User routes
    Route::get('bank/users', [UserController::class, 'index'])->name('user.index');
    Route::get('bank/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('bank/user/create', [UserController::class, 'store']);
    Route::get('bank/user/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('bank/user/{user}', [UserController::class, 'update']);
    Route::delete('bank/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

});

require __DIR__ . '/auth.php';
