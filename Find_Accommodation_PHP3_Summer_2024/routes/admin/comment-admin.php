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
    Route::get('/binh-luan', [CommentAdminController::class, 'index'])->name('pages-commet'); // Route để xem danh sách bình luận       
    Route::put('/{id}', [CommentAdminController::class, 'destroy'])->name('comment.destroy'); // Route để xóa bình luận          
    Route::get('/thung-rac', [CommentAdminController::class, 'trash'])->name('pages-trash-comment'); // Route để xem bình luận đã xóa       
    Route::put('/restore/{id}', [CommentAdminController::class, 'restore'])->name('comment.restore'); // Route để khôi phục bình luận      
    Route::delete('/deletePermanent/{id}', [CommentAdminController::class, 'deletePermanent'])->name('comment.deletePermanent'); // Route để xóa vĩnh viễn bình luận
});
