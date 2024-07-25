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

Route::fallback(function () {
    return redirect('/');
});
// start Nguyen Huu Thang
Route::get('/', [RoomController::class, 'index'])->name('home');
// start Nguyen Huu Thang
// Route::get('/home', [RoomController::class, 'index'])->name('trang-chu.home');
route::get('/trang-dang-bai', [RoomController::class, 'page_posting'])->name('posting-room');
