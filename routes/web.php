<?php

use App\Http\Controllers\VineController;
use App\Http\Controllers\WineController;
use App\Http\Controllers\WineryController;
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
})->name('home');

Route::get('wine', [WineController::class, 'index'])->name('wine');
Route::get('vine', [VineController::class, 'index'])->name('vine');
Route::get('winery', [WineryController::class, 'index'])->name('winery');
