<?php

use App\Http\Controllers\Admin\AdminVineController;
use App\Http\Controllers\Admin\AdminWineryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WineController;
use App\Http\Controllers\Guest\WineController as GuestWineController;
use App\Http\Controllers\Guest\WineryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VineController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\VineController as GuestVineController;
use App\Http\Controllers\Guest\WineryController as GuestWineryController;

Route::get('/', function () {
    return view('home');
});

Route::get('wine', [GuestWineController::class, 'home'])->name('guestWine');
Route::get('vine', [GuestVineController::class, 'home'])->name('guestVine');
Route::get('winery', [GuestWineryController::class, 'home'])->name('guestWinery');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    Route::resource('wines', WineController::class);
    Route::resource('wineries', AdminWineryController::class);
    Route::resource('vines', AdminVineController::class);
    Route::get('/', [DashboardController::class, 'home']);
});

require __DIR__ . '/auth.php';
