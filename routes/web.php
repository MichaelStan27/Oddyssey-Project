<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
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

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/games/{game}', [GameController::class, 'index'])->name('game');
Route::post('/games/{game}/review', [GameController::class, 'store'])->name('review');

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart', [CartController::class, 'store']);
Route::delete('/cart', [CartController::class, 'destroy']);

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
