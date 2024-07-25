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
Route::group(['prefix' => 'bai-viet'], function () {
    //binh luan mhuy
    Route::post('/comments', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');
    Route::get('/xem-bai-viet/{id}/', [CommentController::class, 'index'])->name('comments.index');
    Route::get('/rooms/{id}/comments/all', [CommentController::class, 'showAll'])->name('comments.showAll');

    // Nguyen Huu Thăng

});