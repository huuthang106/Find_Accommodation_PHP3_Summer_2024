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
    // [VoTanLuon] Router hiển thị chi tiết báo cáo
    Route::get('/bang-bao-cao', [ReportAdminController::class, 'index'])->name('pages-report');
    Route::get('/bang-bao-cao/{id}', [ReportAdminController::class, 'showReport'])->name('pages-report-detail');
    // [VoTanLuon] Router xóa mềm Báo Cáo
    Route::delete('/bang-bao-cao/{id}', [ReportAdminController::class, 'destroyReport'])->name('report.destroy');
    // Route xem trang chi tiết thông báo và đổi trạng thái đã xem hoặc chưa xem
    Route::get('chi-tiet-bao-cao/{id}', [ReportAdminController::class, 'viewAndChangeStatus'])->name('pages-report-detail');
});
