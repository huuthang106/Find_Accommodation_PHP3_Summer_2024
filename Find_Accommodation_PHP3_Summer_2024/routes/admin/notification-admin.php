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

Route::middleware('admin_login')->group(function () {
    Route::get('/tables-advanced', [NotificationAdminController::class, 'tables_advanced'])->name('tables-advanced');
    Route::get('/lien-he', [HomeAdminController::class, 'extras_contacts'])->name('extras-contacts');
    // Xóa mềm thông báo admin ở cái chuông
    Route::get('/xoa-tat-ca-thong-bao', [NotificationAdminController::class, 'softDeleteAll'])->name('soft-delete-all-notifications');
    // Route trang danh sách thông báo
    Route::get('/thong-bao', [NotificationAdminController::class, 'showNofi'])->name('pages-notification');
    // Route Xóa thông báo
    Route::delete('/xoa-thong-bao/{id}', [NotificationAdminController::class, 'destroyNofi'])->name('notification.destroy');
    // Route xem trang chi tiết thông báo và đổi trạng thái đã xem hoặc chưa xem
    Route::get('chi-tiet-thong-bao/{id}', [NotificationAdminController::class, 'viewAndChangeStatus'])->name('pages-notification-detail');
});
