<?php

use App\Http\Controllers\TerminalController;
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
    return view('welcome');
});

Route::get('/terminal', [TerminalController::class, 'index'])->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard-crypto');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/advanced-ui-kits-image-crop', function () {
    return view('advanced-ui-kits-image-crop');
});
Route::get('/advanced-ui-kits-jquery-confirm', function () {
    return view('advanced-ui-kits-jquery-confirm');
});
Route::get('/advanced-ui-kits-nestable', function () {
    return view('advanced-ui-kits-nestable');
});
Route::get('/advanced-ui-kits-pnotify', function () {
    return view('advanced-ui-kits-pnotify');
});
Route::get('/advanced-ui-kits-range-slider', function () {
    return view('advanced-ui-kits-range-slider');
});
Route::get('/advanced-ui-kits-ratings', function () {
    return view('advanced-ui-kits-ratings');
});
Route::get('/advanced-ui-kits-session-timeout', function () {
    return view('advanced-ui-kits-session-timeout');
});
Route::get('/advanced-ui-kits-sweet-alerts', function () {
    return view('advanced-ui-kits-sweet-alerts');
});
Route::get('/advanced-ui-kits-switchery', function () {
    return view('advanced-ui-kits-switchery');
});
Route::get('/advanced-ui-kits-toolbar', function () {
    return view('advanced-ui-kits-toolbar');
});
Route::get('/advanced-ui-kits-tour', function () {
    return view('advanced-ui-kits-tour');
});
Route::get('/advanced-ui-kits-treeview', function () {
    return view('advanced-ui-kits-treeview');
});
Route::get('/apps-calender', function () {
    return view('apps-calender');
});
Route::get('/apps-chat', function () {
    return view('apps-chat');
});
Route::get('/apps-email-compose', function () {
    return view('apps-email-compose');
});
Route::get('/apps-email-inbox', function () {
    return view('apps-email-inbox');
});
Route::get('/apps-email-open', function () {
    return view('apps-email-open');
});
Route::get('/apps-kanban-board', function () {
    return view('apps-kanban-board');
});
Route::get('/apps-onboarding-screens', function () {
    return view('apps-onboarding-screens');
});
Route::get('/basic-ui-kits-alerts', function () {
    return view('basic-ui-kits-alerts');
});
Route::get('/basic-ui-kits-badges', function () {
    return view('basic-ui-kits-badges');
});
Route::get('/basic-ui-kits-buttons', function () {
    return view('basic-ui-kits-buttons');
});
Route::get('/basic-ui-kits-cards', function () {
    return view('basic-ui-kits-cards');
});
Route::get('/basic-ui-kits-carousel', function () {
    return view('basic-ui-kits-carousel');
});
Route::get('/basic-ui-kits-collapse', function () {
    return view('basic-ui-kits-collapse');
});
Route::get('/basic-ui-kits-dropdowns', function () {
    return view('basic-ui-kits-dropdowns');
});
Route::get('/basic-ui-kits-embeds', function () {
    return view('basic-ui-kits-embeds');
});
Route::get('/basic-ui-kits-grids', function () {
    return view('basic-ui-kits-grids');
});
Route::get('/basic-ui-kits-images', function () {
    return view('basic-ui-kits-images');
});
Route::get('/basic-ui-kits-media', function () {
    return view('basic-ui-kits-media');
});
Route::get('/basic-ui-kits-modals', function () {
    return view('basic-ui-kits-modals');
});
Route::get('/basic-ui-kits-paginations', function () {
    return view('basic-ui-kits-paginations');
});
Route::get('/basic-ui-kits-popovers', function () {
    return view('basic-ui-kits-popovers');
});
Route::get('/basic-ui-kits-progressbars', function () {
    return view('basic-ui-kits-progressbars');
});
Route::get('/basic-ui-kits-spinners', function () {
    return view('basic-ui-kits-spinners');
});
Route::get('/basic-ui-kits-tabs', function () {
    return view('basic-ui-kits-tabs');
});
Route::get('/basic-ui-kits-toasts', function () {
    return view('basic-ui-kits-toasts');
});
Route::get('/basic-ui-kits-tooltips', function () {
    return view('basic-ui-kits-tooltips');
});
Route::get('/basic-ui-kits-typography', function () {
    return view('basic-ui-kits-typography');
});
Route::get('/chart-apex', function () {
    return view('chart-apex');
});
Route::get('/chart-c3', function () {
    return view('chart-c3');
});
Route::get('/chart-chartistjs', function () {
    return view('chart-chartistjs');
});
Route::get('/chart-chartjs', function () {
    return view('chart-chartjs');
});
Route::get('/chart-flot', function () {
    return view('chart-flot');
});
Route::get('/chart-knob', function () {
    return view('chart-knob');
});
Route::get('/chart-morris', function () {
    return view('chart-morris');
});
Route::get('/chart-piety', function () {
    return view('chart-piety');
});
Route::get('/chart-sparkline', function () {
    return view('chart-sparkline');
});
Route::get('/dashboard-ecommerce', function () {
    return view('dashboard-ecommerce');
});
Route::get('/dashboard-hospital', function () {
    return view('dashboard-hospital');
});
Route::get('/dashboard-crypto', function () {
    return view('dashboard-crypto');
});
Route::get('/dashboard-school', function () {
    return view('dashboard-school');
});
Route::get('/ecommerce-cart', function () {
    return view('ecommerce-cart');
});
Route::get('/ecommerce-checkout', function () {
    return view('ecommerce-checkout');
});
Route::get('/ecommerce-myaccount', function () {
    return view('ecommerce-myaccount');
});
Route::get('/ecommerce-order-detail', function () {
    return view('ecommerce-order-detail');
});
Route::get('/ecommerce-order-list', function () {
    return view('ecommerce-order-list');
});
Route::get('/ecommerce-product-detail', function () {
    return view('ecommerce-product-detail');
});
Route::get('/ecommerce-product-list', function () {
    return view('ecommerce-product-list');
});
Route::get('/ecommerce-shop', function () {
    return view('ecommerce-shop');
});
Route::get('/ecommerce-single-product', function () {
    return view('ecommerce-single-product');
});
Route::get('/ecommerce-thankyou', function () {
    return view('ecommerce-thankyou');
});
Route::get('/error-404', function () {
    return view('error-404');
});
Route::get('/error-500', function () {
    return view('error-500');
});
Route::get('/error-comingsoon', function () {
    return view('error-comingsoon');
});
Route::get('/error-maintenance', function () {
    return view('error-maintenance');
});
Route::get('/form-colorpickers', function () {
    return view('form-colorpickers');
});
Route::get('/form-datepickers', function () {
    return view('form-datepickers');
});
Route::get('/form-editors', function () {
    return view('form-editors');
});
Route::get('/form-file-uploads', function () {
    return view('form-file-uploads');
});
Route::get('/form-groups', function () {
    return view('form-groups');
});
Route::get('/form-input-mask', function () {
    return view('form-input-mask');
});
Route::get('/form-inputs', function () {
    return view('form-inputs');
});
Route::get('/form-layouts', function () {
    return view('form-layouts');
});
Route::get('/form-maxlength', function () {
    return view('form-maxlength');
});
Route::get('/form-selects', function () {
    return view('form-selects');
});
Route::get('/form-touchspin', function () {
    return view('form-touchspin');
});
Route::get('/form-validations', function () {
    return view('form-validations');
});
Route::get('/form-wizards', function () {
    return view('form-wizards');
});
Route::get('/form-xeditable', function () {
    return view('form-xeditable');
});
Route::get('/icon-dripicons', function () {
    return view('icon-dripicons');
});
Route::get('/icon-feather', function () {
    return view('icon-feather');
});
Route::get('/icon-flag', function () {
    return view('icon-flag');
});
Route::get('/icon-font-awesome', function () {
    return view('icon-font-awesome');
});
Route::get('/icon-ionicons', function () {
    return view('icon-ionicons');
});
Route::get('/icon-line-awesome', function () {
    return view('icon-line-awesome');
});
Route::get('/icon-material-design', function () {
    return view('icon-material-design');
});
Route::get('/icon-simple-line', function () {
    return view('icon-simple-line');
});
Route::get('/icon-socicon', function () {
    return view('icon-socicon');
});
Route::get('/icon-themify', function () {
    return view('icon-themify');
});
Route::get('/icon-svg', function () {
    return view('icon-svg');
});
Route::get('/icon-typicons', function () {
    return view('icon-typicons');
});
Route::get('/map-google', function () {
    return view('map-google');
});
Route::get('/map-vector', function () {
    return view('map-vector');
});
Route::get('/page-blog', function () {
    return view('page-blog');
});
Route::get('/page-faq', function () {
    return view('page-faq');
});
Route::get('/page-gallery', function () {
    return view('page-gallery');
});
Route::get('/page-invoice', function () {
    return view('page-invoice');
});
Route::get('/page-pricing', function () {
    return view('page-pricing');
});
Route::get('/page-starter', function () {
    return view('page-starter');
});
Route::get('/page-timeline', function () {
    return view('page-timeline');
});
Route::get('/table-bootstrap', function () {
    return view('table-bootstrap');
});
Route::get('/table-datatable', function () {
    return view('table-datatable');
});
Route::get('/table-editable', function () {
    return view('table-editable');
});
Route::get('/table-footable', function () {
    return view('table-footable');
});
Route::get('/table-rwdtable', function () {
    return view('table-rwdtable');
});
Route::get('/user-forgotpsw', function () {
    return view('user-forgotpsw');
});
Route::get('/user-lock-screen', function () {
    return view('user-lock-screen');
});
Route::get('/user-login', function () {
    return view('user-login');
});
Route::get('/user-register', function () {
    return view('user-register');
});
Route::get('/widgets', function () {
    return view('widgets');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
