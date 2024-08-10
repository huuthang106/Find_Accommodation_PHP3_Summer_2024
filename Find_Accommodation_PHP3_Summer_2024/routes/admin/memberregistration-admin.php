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
use App\Http\Controllers\Admin\MemberregistrationAdminController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Models\Memberregistration;

Route::middleware('admin_login')->group(function () {
    Route::get('danh-sach-don', [MemberregistrationAdminController::class, 'index'])->name('duyet-don');
    Route::get('chi-tiet-don/{id}', [MemberregistrationAdminController::class, 'show'])->name('pages-member-resigter');
    Route::PUT('xoa-don/{id}', [MemberregistrationAdminController::class, 'delete'])->name( 'registration-form');
    Route::get('thung-rac-don', [MemberregistrationAdminController::class, 'trash'])->name('pages-trash-registration-form');
    Route::PUT('khoi-phuc/{id}', [MemberregistrationAdminController::class, 'restore'])->name( 'register.restore');
    Route::PUT('duyet-don/{id}', [MemberregistrationAdminController::class, 'agree'])->name('agree');
    Route::PUT('delete/{id}', [MemberregistrationAdminController::class, 'remove'])->name('register.delete');
   
}
);