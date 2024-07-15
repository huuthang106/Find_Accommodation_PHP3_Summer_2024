<?php

use Illuminate\Support\Facades\Route;
// controller user
use App\Http\Controllers\AcreageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PriceListController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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
use App\Http\Controllers\Admin\UserController as AdminUserController;

Route::get('/', [IndexController::class, 'home'])->name('home');
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
Route::get('/pages-notification', [IndexController::class, 'pages_notification'])->name('pages-notification');
Route::get('/pages-notification-detail', [IndexController::class, 'pages_notification_detail'])->name('pages-notification-detail');
