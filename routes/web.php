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

Route::get('/', function () {
    return view('home');
});

Route::get('/guest', [GuestWineController::class, 'home'])->name('guestHome');
Route::get('/guest', [GuestVineController::class, 'home'])->name('guestHome');
Route::get('/guest', [GuestWineryController::class, 'home'])->name('guestHome');



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
