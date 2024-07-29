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

Route::middleware('auth')->group(function () {
    Route::get('/quan-ly-goi-dang-tin', [PriceListAdminController::class, 'ShowPriceList'])->name('goi-dang-tin');
    Route::put('/price/{id}', [PriceListAdminController::class, 'destroy'])->name('tin.destroy'); //xóa gói tin
    Route::get('/chi-tiet-goi-tin', [PriceListAdminController::class, 'getPriceListDetail'])->name('get-pricelist'); // showw gói tin ra
    Route::get('/chi-tiet-goi-tin/chinh-sua-goi-tin/{id}', [PriceListAdminController::class, 'getPriceListID'])->name('post-pricelist');
    Route::put('/chi-tiet-goi-tin/chinh-sua-goi-tin/{id}', [PriceListAdminController::class, 'update'])->name('put-pricing-detail');
    Route::get('/goi-dang-tin', [PriceListAdminController::class, 'index'])->name('goi-dang-tin'); // router quản lí giá gói admin
});
