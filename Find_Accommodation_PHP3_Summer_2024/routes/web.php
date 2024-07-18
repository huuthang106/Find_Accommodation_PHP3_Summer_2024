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
// controller admin
use App\Http\Controllers\Admin\AcreageAdminController;
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
use App\Http\Controllers\Admin\TransactionAdminController;
use App\Http\COntrollers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

// start Nguyen Huu Thang
Route::get('/', [RoomController::class, 'index'])->name('home');
Route::get('/xem-phong/{id}', [RoomController::class, 'getRoomID'])->name('get-room');



// start Nguyen Huu Thang
Route::get('/home', [RoomController::class, 'index'])->name('home');
Route::get('/xem-phong/{id}', [RoomController::class, 'getRoomID'])->name('get-room');
route::get('/profile', [UserController::class, 'profileuser'])->name('profileus');
route::get('/trang-dang-bai', [RoomController::class, 'page_posting'])->name('posting-room');
// Route bắt tất cả các yêu cầu không khớp
Route::fallback(function () {
    return redirect('/');
});
// Route::get('/', [IndexController::class, 'homeAdmin'])->name('trang-quan-ly');



// Route::get('/', [UserController::class, 'index'])->name('trang-quan-ly');

// Route::get('/tables-advanced', [IndexController::class, 'tables_advanced'])->name('tables-advanced');
// 
// Route::get('/componetns-widgets', [IndexController::class, 'componetns_widgets'])->name('componetns-widgets');
// 


// 






// route user
// Nguyen Huu Thang
Route::get('/xem-phong/{id}', [RoomController::class, 'getRoomID'])->name('get-room');
route::get('/profile', [UserController::class, 'profileuser'])->name('profileus');

// [VoTanLuon] Rpute xem loại trọ client
Route::get('/loai-tro', [CategoryController::class, 'index'])->name('category-motel');
// [VoTanLuon] Route trang thông tin tài khoản người dùng (client)
Route::get('/thong-tin-tai-khoan/{id}', [UserController::class, 'show'])->name('profileus');
// [VoTanLuon] Route trang sửa thông tin tài khoản người dùng (client)
route::put('/thong-tin-tai-khoan/{id}', [UserController::class, 'update'])->name('update-profile');
// Route::get('/', [IndexController::class, 'home'])->name('home');

//Login user mhuy
Route::get('/login', [AuthController::class, 'pages_login'])->name('login');
Route::post('/login-check', [AuthController::class, 'check_login'])->name('login-users');

// Register user
Route::get('/register', [RegisterController::class, 'pages_register'])->name('register-user');
Route::post('/', [RegisterController::class, 'check_register']);
//
// Login trước khi vào các trang admin
Route::get('/admin/dang-nhap', [IndexAdminController::class, 'pages_login'])->name('pages-login-admin');
Route::post('/admin/dang-nhap', [IndexAdminController::class, 'check_login']);
// Đăng ký admin
Route::get('/admin/dang-ky', [IndexAdminController::class, 'pages_register'])->name('pages-register-admin');
Route::post('/admin/dang-ky', [IndexAdminController::class, 'check_register']);
// Đăng xuất admin
Route::post('/logout', [IndexController::class, 'logout'])->name('logout');
// Login trước khi vào trang admin

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    // Route::get('/home', [HomeAdminController::class, 'index'])->name('trang-quan-ly');
    Route::get('/trang-quan-ly', [HomeAdminController::class, 'homeAdmin'])->name('trang-quan-ly');
    Route::get('/tables-advanced', [NotificationAdminController::class, 'tables_advanced'])->name('tables-advanced');

    Route::get('/quan-ly-goi-dang-tin', [PriceListAdminController::class, 'index'])->name('goi-dang-tin'); // router quản lí giá gói admin
    Route::get('/profile', [UserController::class, 'index'])->name('extras-profile'); // router trang quan li ho so
    // Route::get('/extras-profile', [IndexController::class, 'extras_profile'])->name('extras-profile');


    Route::get('/lien-he', [HomeAdminController::class, 'extras_contacts'])->name('extras-contacts');
    Route::get('/thong-so', [IndexController::class, 'charts'])->name('charts');
    Route::get('/quan-li-ho-so', [UserController::class, 'index'])->name('quan-li-ho-so'); // router trang quan li ho so
    // Router thông báo admin

    Route::get('/trang-thong-bao', [NotificationAdminController::class, 'index'])->name('pages-notification');
    // Router chi tiết thông báo admin
    Route::get('/trang-chi-tiet-thong-bao/{id}', [NotificationAdminController::class, 'show'])->name('pages-notification-detail');
    // Router Đã xem thông báo admin
    Route::post('/trang-chi-tiet-thong-bao/cap-nhat/{id}', [NotificationAdminController::class, 'update'])->name('pages-notification-detail');
    // Xóa mềm thông báo admin
    Route::get('/xoa-tat-ca-thong-bao', [NotificationAdminController::class, 'softDeleteAll'])->name('soft-delete-all-notifications');

    //Nguyen Thai Toan 
    Route::get('/goi-dang-tin', [PriceListAdminController::class, 'index'])->name('goi-dang-tin');
    Route::get('/chi-tiet-goi-tin', [PriceListAdminController::class, 'getPriceListDetail'])->name('get-pricelist');
    Route::get('/chinh-sua-goi-tin/{id}', [PriceListAdminController::class, 'getPriceListID'])->name('post-pricelist');
    Route::PUT('/chinh-sua-goi-tin/{id}', [PriceListAdminController::class, 'update'])->name('put-pricelist');
    // end Thai Toan
    Route::get('/quan-ly-bai-viet', [RoomAdminController::class, 'index'])->name('pages-room');
    Route::get('/quan-ly-binh-luan', [CommentAdminController::class, 'index'])->name('pages-commet');
    
    // Nguyen Thai Toan admin


    // end Nguyen Thai Toan admin


    // Le Minh Huy admin

    // end Le Minh Huy admin


    // Tong Chi Nhan admin


    // end Tong Chi Nhan admin


    // Vo Tan Luon admin


    // end Vo Tan Luon admin

    // Nguyen Huu Thang admin


    // end Nguyen Huu Thang admin

});



// Route::get('/pages-edit-pricing', [IndexController::class, 'pages_edit_pricing'])->name('pages-edit-pricing');
// Nguyen Thai Toan user


// end Nguyen Thai Toan user


// Le Minh Huy user

// end Le Minh Huy user


// Tong Chi Nhan user


// end Tong Chi Nhan user


// Vo Tan Luon user


// end Vo Tan Luon User

// Nguyen Huu Thang user


// end Nguyen Huu Thang user