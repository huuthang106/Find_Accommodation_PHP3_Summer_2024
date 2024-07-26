<?php
use Illuminate\Support\Facades\Route;
// controller admin
use App\Http\Controllers\Admin\AcreageAdminController;
use App\Http\Controllers\Admin\BlogAdminController;
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
use App\Http\Controllers\Admin\RoleAdminController;
use App\Http\Controllers\Admin\TransactionAdminController;
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\RegisterAdminController;
use App\Http\Controllers\Admin\ReportAdminController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Client\IndexController;

// Quên Mật Khẩu Admin
Route::get('/quen-mat-khau', [UserController::class, 'forget_password'])->name('pages-forget-password');
Route::post('/quen-mat-khau', [UserController::class, 'check_forget_password'])->name('check-forget-password');
// Đổi Mật Khẩu Admin
Route::get('/doi-mat-khau/{token}', [UserController::class, 'reset_password'])->name('pages-reset-password');
Route::post('/doi-mat-khau/{token}', [UserController::class, 'check_reset_password'])->name('check-reset-password');
// Quên Mật Khẩu User
Route::post('/lay-lai-mat-khau', [UserController::class, 'check_forget_password_us'])->name('check-forget-password-us');
Route::get('/dang-nhap', [IndexAdminController::class, 'pages_login'])->name('pages-login-admin');
Route::post('/dang-nhap', [IndexAdminController::class, 'check_login']);
// Đăng ký admin
Route::get('/dang-ky', [IndexAdminController::class, 'pages_register'])->name('pages-register-admin');
Route::post('/dang-ky', [IndexAdminController::class, 'check_register'])->name('check-register');
// Đăng xuất admin
Route::post('/logout', [IndexController::class, 'logout'])->name('logout');
// Login trước khi vào trang admin
Route::get('/', [IndexAdminController::class, 'admin'])->name('admin');


Route::middleware('auth')->group(function () {
// [VoTanLuon] Router hiển thị chỉnh sửa tài khoản Admin
Route::get('/quan-li-ho-so', [UserController::class, 'index'])->middleware('auth')->name('quan-li-ho-so');
route::put('/quan-li-ho-so/{id}', [UserController::class, 'update_profile_admin'])->name('chinh-sua-ho-so');
// start Thai Toan 
Route::get('/quan-ly-nguoi-dung', [UserController::class, 'showAdmin'])->name('manages-user');
// end Thai Toan
Route::get('/extras-profile', [UserController::class, 'index'])->name('extras-profile');
Route::get('/role', [RoleAdminController::class, 'ShowRole'])->name('quan-li-role');
Route::delete('/delete-role/{id}', [RoleAdminController::class, 'deleteRole'])->name('delete-role');
});