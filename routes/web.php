<?php

use App\Http\Controllers\AddCategoryController;
use App\Http\Controllers\AddGameController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ManageCategoryController;
use App\Http\Controllers\ManageGameController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UpdateCategoryController;
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

// Unauthenticate user only
Route::group(['middleware' => 'guest'], function () {
    Route::controller(RegisterController::class)->name('register')->group(function () {
        Route::get('/register', 'index');
        Route::post('/register', 'store');
    });

    Route::controller(LoginController::class)->name('login')->group(function () {
        Route::get('/login', 'index');
        Route::post('/login', 'store');
    });
});

// Authenticate user only
Route::group(['middleware' => 'auth'], function () {

    Route::controller(CartController::class)->name('cart')->group(function () {
        Route::get('/cart', 'index');
        Route::post('/cart', 'store');
        Route::delete('/cart', 'destroy');
    });

    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

    // Admin only
    Route::group(['middleware' => 'can:admin'], function () {
        Route::controller(ManageCategoryController::class)->name('manage-category.')->group(function () {
            Route::get('/manage-category', 'index')->name('view');
            Route::post('/manage-category', 'store')->name('create');
            Route::put('/manage-category/{category}', 'update')->name('update');
            Route::delete('/manage-category/{category}', 'delete')->name('delete');
        });

        Route::controller(ManageGameController::class)->name('manage-game.')->group(function () {
            Route::get('/manage-game', 'index')->name('view');
            Route::post('/manage-game', 'store')->name('create');
            Route::put('/manage-game/{game}', 'update')->name('update');
            Route::delete('/manage-game/{game}', 'destroy')->name('delete');
        });

        Route::get('/add-game', [AddGameController::class, 'index'])->name('add-game');
        Route::get('/update-game/{game}', [UpdateGameController::class, 'index'])->name('update-game');
        Route::post('/update-game/{game}', [UpdateGameController::class, 'index']);

        Route::get('/add-category', [AddCategoryController::class, 'index'])->name('add-category');
        Route::get('/update-category/{category}', [UpdateCategoryController::class, 'index'])->name('update-category');
        Route::post('/update-category/{category}', [UpdateCategoryController::class, 'index']);
    });
});

// All user
Route::get('/games/{game}', [GameController::class, 'index'])->name('game');
Route::post('/games/{game}/review', [GameController::class, 'store'])->middleware('auth')->name('review');

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
