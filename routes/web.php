<?php

use App\Http\Controllers\AddGameController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ManageGameController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UpdateGameController;
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

Route::get('/manage-game', [ManageGameController::class, 'index'])->name('manage-game');
Route::post('/manage-game', [ManageGameController::class, 'store'])->name('manage-game.create');
Route::put('/manage-game/{game}', [ManageGameController::class, 'update'])->name('manage-game.update');
Route::delete('/manage-game/{game}', [ManageGameController::class, 'destroy'])->name('manage-game.delete');

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart', [CartController::class, 'store']);
Route::delete('/cart', [CartController::class, 'destroy']);

Route::get('/add-game', [AddGameController::class, 'index'])->name('add-game');

Route::post('/update-game/{game}', [UpdateGameController::class, 'store'])->name('update-game');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
