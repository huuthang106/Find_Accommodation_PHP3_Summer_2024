<?php

use Illuminate\Support\Facades\Route;
// controller user
use App\Http\Controllers\Client\AcreageController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\FavouriteController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ImageController;
use App\Http\Controllers\Client\IndexController;
use App\Http\Controllers\Client\LocationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Client\PriceListController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\Client\RoomController;
use App\Http\Controllers\Client\EvaluateController;
use App\Http\Controllers\Client\TransactionController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Client\RegisterController;
// controller admin
use App\Http\Controllers\Admin\AcreageAdminController;
use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\CommentAdminController;
use App\Http\Controllers\Admin\FavouriteAdminController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\ImageAdminController;
use App\Http\Controllers\Admin\IndexAdminController;
use App\Http\Controllers\Admin\LocationAdminController;
use App\Http\Controllers\Admin\NotificationAdminController;
use App\Http\Controllers\Admin\PriceListAdminController;
use App\Http\Controllers\Admin\PricesAdminController;
use App\Http\Controllers\Admin\RoomAdminController;
use App\Http\Controllers\Admin\TransactionAdminController;
use App\Http\COntrollers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

// start Nguyen Huu Thang
Route::get('/', [RoomController::class, 'index'])->name('home');
Route::get('/xem-phong/{id}', [RoomController::class, 'getRoomID'])->name('get-room');
route::get('/profile', [UserController::class, 'profileuser'])->name('profileus');
// Route bắt tất cả các yêu cầu không khớp
Route::fallback(function () {
    return redirect('/');
});
// Route::get('/', [IndexController::class, 'homeAdmin'])->name('trang-quan-ly');


Route::get('/home', [IndexController::class, 'homeAdmin'])->name('trang-quan-ly');

Route::get('/tables-advanced', [IndexController::class, 'tables_advanced'])->name('tables-advanced');
Route::get('/charts', [IndexController::class, 'charts'])->name('charts');
Route::get('/componetns-widgets', [IndexController::class, 'componetns_widgets'])->name('componetns-widgets');
Route::get('/extras-contacts', [IndexController::class, 'extras_contacts'])->name('extras-contacts');

Route::get('/goi-dang-tin', [PriceListController::class, 'index'])->name('goi-dang-tin');


Route::get('/quan-li-ho-so', [UserController::class, 'index'])->name('extras-profile'); // router trang quan li ho so
// Route::get('/goi-dang-tin', [PriceListController::class, 'index'])->name('extras-pricing'); // router trang goi dang tin

Route::get('/quan-li-ho-so', [UserController::class, 'index'])->name('quan-li-ho-so'); // router trang quan li ho so

Route::get('/layouts-dark-sidebar', [IndexController::class, 'layouts_dark_sidebar'])->name('layouts-dark-sidebar');
Route::get('/layouts-horizontal', [IndexController::class, 'layouts_horizontal'])->name('layouts-horizontal');
Route::get('/layouts-sidebar-collapsed', [IndexController::class, 'layouts_sidebar_collapsed'])->name('layouts-sidebar-collapsed');
Route::get('/layouts-small-sidebar', [IndexController::class, 'layouts_small_sidebar'])->name('layouts-small-sidebar');
Route::get('/pages-404', [IndexController::class, 'pages_404'])->name('pages-404');
Route::get('/pages-confirm-mail', [IndexController::class, 'pages_confirm_mail'])->name('pages-confirm-mail');
Route::get('/pages-forget-password', [IndexController::class, 'pages_forget_password'])->name('pages-forget-password');
Route::get('/pages-login', [IndexController::class, 'pages_login'])->name('pages-login');
Route::get('/pages-register', [IndexController::class, 'pages_register'])->name('pages-register');
Route::get('/pages-session-expired', [IndexController::class, 'pages_session_expired'])->name('pages-session-expired');
Route::get('/pages-notification', [IndexController::class, 'pages_notification'])->name('pages-notification');
Route::get('/pages-notification-detail', [IndexController::class, 'pages_notification_detail'])->name('pages-notification-detail');
Route::get('/pages-commet', [IndexController::class, 'pages_commet'])->name('pages-commet');

Route::get('/pages-evaluate', [IndexController::class, 'pages_evaluate'])->name('pages-evaluate');
// route user

Route::get('/xem-phong/{id}', [RoomController::class, 'getRoomID'])->name('get-room');
route::get('/profile', [UserController::class, 'profileuser'])->name('profileus');
// Route::get('/', [IndexController::class, 'home'])->name('home');

//Login user mhuy
Route::get('/login', [AuthController::class, 'pages_login'])->name('login');
Route::post('/login-check', [AuthController::class, 'check_login'])->name('login-users');

// Register user
Route::get('/register', [RegisterController::class, 'pages_register'])->name('layouts.layout-user');
Route::post('/', [RegisterController::class, 'check_register']);
//
// Login trước khi vào các trang admin
Route::get('/admin/dang-nhap', [IndexController::class, 'pages_login'])->name('admincp.pages-login');
Route::post('/admin/dang-nhap', [IndexController::class, 'check_login']);
// Đăng ký admin
Route::get('/admin/dang-ky', [IndexController::class, 'pages_register'])->name('admincp.pages-register');
Route::post('/admin/dang-ky', [IndexController::class, 'check_register']);
// Đăng xuất admin
Route::post('/logout', [IndexController::class, 'logout'])->name('logout');
// Login trước khi vào trang admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/trang-quan-ly', [IndexController::class, 'homeAdmin'])->name('trang-quan-ly');
    Route::get('/tables-advanced', [IndexController::class, 'tables_advanced'])->name('tables-advanced');
    Route::get('/charts', [IndexController::class, 'charts'])->name('charts');
    Route::get('/componetns-widgets', [IndexController::class, 'componetns_widgets'])->name('componetns-widgets');
    Route::get('/extras-contacts', [IndexController::class, 'extras_contacts'])->name('extras-contacts');
    Route::get('/extras-pricing', [IndexController::class, 'extras_pricing'])->name('extras-pricing');
    Route::get('/extras-profile', [IndexController::class, 'extras_profile'])->name('extras-profile');
    Route::get('/layouts-dark-sidebar', [IndexController::class, 'layouts_dark_sidebar'])->name('layouts-dark-sidebar');
    Route::get('/layouts-horizontal', [IndexController::class, 'layouts_horizontal'])->name('layouts-horizontal');
    Route::get('/layouts-sidebar-collapsed', [IndexController::class, 'layouts_sidebar_collapsed'])->name('layouts-sidebar-collapsed');
    Route::get('/layouts-small-sidebar', [IndexController::class, 'layouts_small_sidebar'])->name('layouts-small-sidebar');
    Route::get('/pages-404', [IndexController::class, 'pages_404'])->name('pages-404');
    Route::get('/pages-confirm-mail', [IndexController::class, 'pages_confirm_mail'])->name('pages-confirm-mail');
    Route::get('/pages-forget-password', [IndexController::class, 'pages_forget_password'])->name('pages-forget-password');
    Route::get('/pages-login', [IndexController::class, 'pages_login'])->name('pages-login');
    Route::get('/pages-register', [IndexController::class, 'pages_register'])->name('pages-register');
    Route::get('/pages-session-expired', [IndexController::class, 'pages_session_expired'])->name('pages-session-expired');
    Route::get('/pages-commet', [IndexController::class, 'pages_commet'])->name('pages-commet');
    Route::get('/pages-room', [RoomAdminController::class, 'index'])->name('pages-room');
    Route::get('/pages-evaluate', [IndexController::class, 'pages_evaluate'])->name('pages-evaluate');

    // Router thông báo admin
    Route::get('/trang-thong-bao', [NotificationAdminController::class, 'index'])->name('pages-notification');
    // Router chi tiết thông báo admin
    Route::get('/trang-chi-tiet-thong-bao/{id}', [NotificationAdminController::class, 'show'])->name('pages-notification-detail');
    // Router Đã xem thông báo admin
    Route::post('/trang-chi-tiet-thong-bao/cap-nhat/{id}', [NotificationAdminController::class, 'update'])->name('pages-notification-detail');
    // Xóa mềm thông báo admin
    Route::get('/xoa-tat-ca-thong-bao', [NotificationAdminController::class, 'softDeleteAll'])->name('soft-delete-all-notifications');
});
Route::get('/pages-commet', [CommentAdminController::class, 'index'])->name('pages-commet');
Route::get('/pages-room', [RoomAdminController::class, 'index'])->name('pages-room');
Route::get('/pages-evaluate', [IndexController::class, 'pages_evaluate'])->name('pages-evaluate');
Route::get('/pages-edit-pricing', [IndexController::class, 'pages_edit_pricing'])->name('pages-edit-pricing');
