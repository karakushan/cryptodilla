<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FilepondController;
use App\Http\Controllers\BinanceController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\TerminalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserGroupController;
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

require __DIR__ . '/auth.php';
Auth::routes();

/* LANDING PAGE */
Route::get('/', function () {
    return view('welcome');
});

/* РОУТЫ ТОРГОВОГО ТЕРМИНАЛА */
Route::middleware(['auth'])->prefix('terminal')->group(function () {
    Route::get('/', [TerminalController::class, 'index'])->name('terminal.index');
    Route::post('/exchanges', [TerminalController::class, 'getExchanges']);
    //  BINANCE
    Route::post('/binance/get-info/', [BinanceController::class, 'getExchangeInfo']);
    Route::post('/binance/account/', [BinanceController::class, 'getAccount']);
    Route::post('/binance/order-test/', [BinanceController::class, 'orderOpenTest']);
    Route::post('/binance/get-orders/', [BinanceController::class, 'getOrders']);
});

/* РОУТЫ АДМИНКИ */
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard.index');
    Route::post('/users/upload-avatar', [UserController::class, 'uploadAvatar'])->name('users.upload-avatar');
    Route::resources([
        'users' => UserController::class,
        'user-groups' => UserGroupController::class,
        'exchanges' => ExchangeController::class
    ]);
});

Route::prefix('filepond')->group(function () {
    Route::post('/process', [FilepondController::class, 'upload'])->name('filepond.upload');
    Route::post('/process', [FilepondController::class, 'upload'])->name('filepond.upload');
    Route::get('/', [FilepondController::class, 'load'])->name('filepond.load');
});


