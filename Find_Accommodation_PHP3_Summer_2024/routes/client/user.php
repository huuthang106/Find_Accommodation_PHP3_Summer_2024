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
use App\Http\Controllers\Client\PricesController;
use App\Http\Controllers\Client\RoomController;
use App\Http\Controllers\Client\EvaluateController;
use App\Http\Controllers\Client\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Client\RegisterController;
use App\Http\Controllers\Client\MemberregistrationController;



// VoTanLuon Start
//Login user mhuy
Route::get('/login', [AuthController::class, 'pages_login'])->name('login')->middleware('guest');
Route::post('/login-check', [AuthController::class, 'check_login'])->name('login-users');
// Register user
Route::get('/register', [RegisterController::class, 'pages_register'])->name('register-user');
Route::post('/register', [RegisterController::class, 'check_register']);
//
// Đổi Mật Khẩu User
Route::get('/thay-doi-mat-khau/{token}', [UserController::class, 'reset_password_us'])->name('pages-reset-password-us');
Route::post('/thay-doi-mat-khau/{token}', [UserController::class, 'check_reset_password_us'])->name('check-reset-password-us');
// VoTanLuon End
Route::get('/ho-so-nguoi-khac/{id}', [UserController::class, 'showHome'])->name('profile-other');

// Nguyen Huu Thang 
Route::get('/login', [HomeController::class, 'login'])->name('login');


Route::post('/logout', [IndexController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'tai-khoan', 'middleware' => 'auth'], function () {
    Route::get('/', [UserController::class, 'show'])->name('profileus');
    Route::get('/dang-ky-thanh-vien', [MemberregistrationController::class, 'index'])->name('register-member');
    Route::post('/dang-ky-thanh-vien', [MemberregistrationController::class, 'store'])->name('check-register-member');
    // [VoTanLuon] Route trang đổi mật khẩu tài khoản người dùng (client)
    Route::get('/doi-mat-khau', [UserController::class, 'show_update_password'])->name('pages-update-password');
    // [VoTanLuon] Route trang thông tin tài khoản người dùng (client)
    Route::get('/thong-tin-tai-khoan', [UserController::class, 'show'])->middleware('auth')->name('profileus');
    // [VoTanLuon] Route trang chỉnh sửa thông tin tài khoản người dùng 
    Route::put('/thong-tin-tai-khoan/{id}', [UserController::class, 'update'])->name('chinh-sua-thong-tin');
    Route::put('/cap-nhat-mat-khau', [UserController::class, 'check_update_password'])->name('check_update_password');
    // Nguyen Thai Toan user
    Route::get('/xoa-bai-dang/{id}', [RoomController::class, 'delete'])->name('delete-posting');
    // Nguyen Huu Thang user
    Route::post('/xu-ly-dang-bai', [RoomController::class, 'check_post_room'])->name('show-posting-room');
    Route::get('/chinh-sua-bai-viet/{id}', [RoomController::class, 'page_edit_posting'])->name('edit-posting');
    route::PUT('/xu-ly-cap-nhat-phong/{id}',[RoomController::class, 'update_post_room'])->name('update-posting');
});
