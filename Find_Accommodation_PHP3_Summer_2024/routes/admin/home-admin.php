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
use App\Http\Controllers\Client\IndexController;
Route::middleware('admin_login')->group(function () {
Route::get('/trang-quan-ly', [HomeAdminController::class, 'homeAdmin'])->name('trang-quan-ly');

Route::get('/quan-ly-goi-dang-tin', [PriceListAdminController::class, 'ShowPriceList'])->name('goi-dang-tin');
});
Route::get('/loi-trang', [IndexController::class, 'pages_404'])->name('pages-404');