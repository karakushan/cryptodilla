<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatsController;
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
    Route::get('/exchanges', [ExchangeController::class, 'getExchanges']);
    Route::post('/attach-exchange', [ExchangeController::class, 'attachUserExchange']);
    Route::post('/deattach-exchange', [ExchangeController::class, 'deattachUserExchange']);

    //  BINANCE
    Route::post('/exchange/get-info/{slug}', [ExchangeController::class, 'getExchangeInfo']);
    Route::post('/exchange/account/{slug}', [ExchangeController::class, 'getAccount']);
    Route::post('/exchange/order-test/{slug}', [BinanceController::class, 'orderOpenTest']);
    Route::post('/exchange/get-orders/{slug}', [ExchangeController::class, 'getOrders']);

    // CHAT
    Route::get('/chat-messages', [ChatsController::class,'fetchMessages']);
    Route::post('/chat-messages', [ChatsController::class,'sendMessage']);
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


