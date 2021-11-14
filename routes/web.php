<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BotController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\FaqCategoryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FilepondController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TerminalController;
use App\Http\Controllers\TicketController;
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
Route::get('/', [PageController::class, 'homePage'])->name('homepage');
Route::get('test', function (){
    echo 'test';
});
Route::get('/google2fa-auth', [UserController::class, 'google2fa_page'])->name('google2fa');
Route::post('/google2fa-validate', [UserController::class, 'google2fa_validate'])->name('google2fa_validate');
Route::get('locale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');

/* РОУТЫ ТОРГОВОГО ТЕРМИНАЛА */
Route::group(['prefix' => 'terminal', 'middleware' => ['auth', 'verified', 'permission:manage terminal|manage admin', 'google2fa']], function () {
    Route::get('/', [TerminalController::class, 'index'])->name('terminal.index');
    Route::get('/exchanges', [ExchangeController::class, 'getExchanges']);
    Route::post('/attach-exchange', [ExchangeController::class, 'attachUserExchange']);
    Route::post('/deattach-exchange', [ExchangeController::class, 'deattachUserExchange']);
    Route::put('/user-update/{id}', [UserController::class, 'update']);
    Route::post('/user-2fa', [UserController::class, 'google2fa']);
    Route::post('/user-2fa-validate', [UserController::class, 'google2fa_validate']);
    Route::post('/user-2fa-disable', [UserController::class, 'google2faDisable']);
    Route::post('/user-activity', [UserController::class, 'getActivityLog']);
    Route::post('/save-bot-settings', [BotController::class, 'saveSettings']);
    Route::get('/bot-settings/{bot}', [BotController::class, 'getSettings']);
    Route::get('/news-categories', [NewsCategoryController::class, 'getAll']);

    Route::get('/market-overview', [ExchangeController::class, 'marketOverview']);
    Route::get('/faq', [FaqController::class, 'getFaqs']);
    Route::get('/price/{symbol}', [ExchangeController::class, 'price']);

    //  EXCHANGES
    Route::prefix('exchange')->group(function () {
        Route::post('get-info/{slug}', [ExchangeController::class, 'getExchangeInfo']);
        Route::get('account/{id}', [ExchangeController::class, 'getAccount']);
        Route::post('create-order/{slug}', [ExchangeController::class, 'createOrder']);
        Route::post('get-orders', [ExchangeController::class, 'getOrders']);
        Route::post('get-open-orders/{slug}', [ExchangeController::class, 'getOpenOrders']);
        Route::post('cancel-order', [ExchangeController::class, 'cancelOrder']);
        Route::post('set-active-account', [ExchangeController::class, 'setActiveAccount']);
        Route::get('ticker/{slug}', [ExchangeController::class, 'ticker']);
    });

    // CHAT
    Route::get('/chat-messages', [ChatsController::class, 'fetchMessages']);
    Route::post('/chat-messages', [ChatsController::class, 'sendMessage']);

    // TICKETS
    Route::get('/user-tickets', [TicketController::class, 'getCurrentUserTickets']);
    Route::get('/ticket/{id}', [TicketController::class, 'getTicket']);
    Route::post('/ticket/sendMessage', [TicketController::class, 'sendMessage']);

    // FAQ
    Route::get('/faq/{?id}', [FaqController::class, 'getFaqs']);
    Route::get('/faq-item/{id}', [FaqController::class, 'getItem']);

    // NEWS
    Route::get('/news', [NewsController::class, 'getNews']);
    Route::get('/news/{id}', [NewsController::class, 'getSingleNews']);

    // WebSockets
    Route::get('/ticker/{exchange}/{symbol}', [ExchangeController::class, 'ticker']);
    Route::get('/trades/{exchange}/{symbol}', [ExchangeController::class, 'trades']);

    Route::resources([
        'ticket' => TicketController::class,
    ]);
});

/* РОУТЫ АДМИНКИ */
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'permission:manage admin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard.index');
    Route::post('/users/upload-avatar', [UserController::class, 'uploadAvatar'])->name('users.upload-avatar');
    Route::resources([
        'users' => UserController::class,
        'user-groups' => UserGroupController::class,
        'exchanges' => ExchangeController::class,
        'currencies' => CurrencyController::class,
        'faqs' => FaqController::class,
        'faq-categories' => FaqCategoryController::class,
        'news' => NewsController::class,
        'news-category' => NewsCategoryController::class,
        'settings' => SettingController::class,
    ]);
});

Route::prefix('filepond')->group(function () {
    Route::post('/process', [FilepondController::class, 'upload'])->name('filepond.upload');
    Route::post('/process', [FilepondController::class, 'upload'])->name('filepond.upload');
    Route::get('/', [FilepondController::class, 'load'])->name('filepond.load');
});


