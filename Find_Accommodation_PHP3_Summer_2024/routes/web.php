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
use App\Http\COntrollers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

// start Nguyen Huu Thang
Route::get('/', [RoomController::class, 'index'])->name('home');
Route::get('/xem-phong/{id}', [RoomController::class, 'getRoomID'])->name('get-room');



// start Nguyen Huu Thang
Route::get('/home', [RoomController::class, 'index'])->name('home');
Route::get('/xem-phong/{id}', [RoomController::class, 'getRoomID'])->name('get-room');

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
// Nguyen Huu Thang

// [VoTanLuon] Rpute xem loại trọ client
Route::get('/loai-tro', [CategoryController::class, 'index'])->name('category-motel');
// [VoTanLuon] Route trang thông tin tài khoản người dùng (client)
Route::get('/thong-tin-tai-khoan', [UserController::class, 'show'])->middleware('auth')->name('profileus');
// [VoTanLuon] Route trang chỉnh sửa thông tin tài khoản người dùng 
Route::put('/thong-tin-tai-khoan/{id}', [UserController::class, 'update'])->name('chinh-sua-thong-tin');
// [VoTanLuon] Route trang sửa thông tin tài khoản người dùng (client)

// VoTanLuon Start
// Quên Mật Khẩu Admin
Route::get('/quen-mat-khau', [UserController::class, 'forget_password'])->name('pages-forget-password');
Route::post('/quen-mat-khau', [UserController::class, 'check_forget_password'])->name('check-forget-password');
// Đổi Mật Khẩu Admin
Route::get('/doi-mat-khau/{token}', [UserController::class, 'reset_password'])->name('pages-reset-password');
Route::post('/doi-mat-khau/{token}', [UserController::class, 'check_reset_password'])->name('check-reset-password');
// Quên Mật Khẩu User
Route::post('/lay-lai-mat-khau', [UserController::class, 'check_forget_password_us'])->name('check-forget-password-us');
// Đổi Mật Khẩu User
Route::get('/thay-doi-mat-khau/{token}', [UserController::class, 'reset_password_us'])->name('pages-reset-password-us');
Route::post('/thay-doi-mat-khau/{token}', [UserController::class, 'check_reset_password_us'])->name('check-reset-password-us');
// VoTanLuon End

// route::put('/thong-tin-tai-khoan/{id}', [UserController::class, 'update'])->name('update-profile');
// Route::get('/', [IndexController::class, 'home'])->name('home');




//Login user mhuy
Route::get('/login', [AuthController::class, 'pages_login'])->name('login');
Route::post('/login-check', [AuthController::class, 'check_login'])->name('login-users');

// Register user
Route::get('/register', [RegisterController::class, 'pages_register'])->name('register-user');
Route::post('/register', [RegisterController::class, 'check_register']);
//
Route::get('/loi-trang', [IndexController::class, 'pages_404'])->name('pages-404');
// Login trước khi vào các trang admin
Route::get('/admin/dang-nhap', [IndexAdminController::class, 'pages_login'])->name('pages-login-admin');
Route::post('/admin/dang-nhap', [IndexAdminController::class, 'check_login']);
// Đăng ký admin
Route::get('/admin/dang-ky', [IndexAdminController::class, 'pages_register'])->name('pages-register-admin');
Route::post('/admin/dang-ky', [IndexAdminController::class, 'check_register'])->name('check-register');
// Đăng xuất admin
Route::post('/logout', [IndexController::class, 'logout'])->name('logout');
// Login trước khi vào trang admin
Route::get('/admin', [IndexAdminController::class, 'admin'])->name('admin');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    // Route::get('/home', [HomeAdminController::class, 'index'])->name('trang-quan-ly');
    Route::get('/trang-quan-ly', [HomeAdminController::class, 'homeAdmin'])->name('trang-quan-ly');

    Route::get('/tables-advanced', [NotificationAdminController::class, 'tables_advanced'])->name('tables-advanced');

    // router quản lí giá gói admin



    Route::get('/lien-he', [HomeAdminController::class, 'extras_contacts'])->name('extras-contacts');
    Route::get('/thong-so', [IndexController::class, 'charts'])->name('charts');
    // [VoTanLuon] Router hiển thị trang tài khoản Admin
    Route::get('/quan-li-ho-so', [UserController::class, 'index'])->middleware('auth')->name('quan-li-ho-so');
    // [VoTanLuon] Router hiển thị chỉnh sửa tài khoản Admin
    route::put('/quan-li-ho-so/{id}', [UserController::class, 'update_profile_admin'])->name('chinh-sua-ho-so');
    // Router thông báo admin


    // Router chi tiết thông báo admin
    Route::get('/trang-chi-tiet-thong-bao/{id}', [NotificationAdminController::class, 'show'])->name('pages-notification-detail');
    // Router Đã xem thông báo admin
    Route::post('/trang-chi-tiet-thong-bao/cap-nhat/{id}', [NotificationAdminController::class, 'update'])->name('update-pages-notification-detail');
    // Xóa mềm thông báo admin
    Route::get('/xoa-tat-ca-thong-bao', [NotificationAdminController::class, 'softDeleteAll'])->name('soft-delete-all-notifications');


    // end Thai Toan




    //Tong chi nhan user
    Route::post('/report-room/{roomId}', [RoomController::class, 'reportRoom'])->name('report.room');
   
    // end Tong chi nhan

    // Tong Chi Nhan admin
    Route::get('/extras-profile', [UserController::class, 'index'])->name('extras-profile')->middleware('auth');
 
  


    Route::get('/quan-ly-goi-dang-tin', [PriceListAdminController::class, 'ShowPriceList'])->name('goi-dang-tin');
    // router trang quan li ho so  
    // Route::get('/extras-profile', [IndexController::class, 'extras_profile'])->name('extras-profile');


    Route::put('/rooms/{id}', [RoomAdminController::class, 'destroy'])->name('rooms.destroy'); // xóa phòng


    Route::put('/price/{id}', [PriceListAdminController::class, 'destroy'])->name('tin.destroy'); //xóa gói tin








    // end Tong Chi Nhan admin


    // Vo Tan Luon admin


    // end Vo Tan Luon admin

    // Nguyen Huu Thang admin
    Route::group(['prefix' => 'trang-quan-ly'], function () {
        Route::prefix('binh-luan')->group(function () {
            Route::get('/binh-luan', [CommentAdminController::class, 'index'])->name('pages-commet');// Route để xem danh sách bình luận       
            Route::put('/{id}', [CommentAdminController::class, 'destroy'])->name('comment.destroy'); // Route để xóa bình luận          
            Route::get('/thung-rac', [CommentAdminController::class, 'trash'])->name('pages-trash-comment'); // Route để xem bình luận đã xóa       
            Route::put('/restore/{id}', [CommentAdminController::class, 'restore'])->name('comment.restore'); // Route để khôi phục bình luận      
            Route::delete('/deletePermanent/{id}', [CommentAdminController::class, 'deletePermanent'])->name('comment.deletePermanent'); // Route để xóa vĩnh viễn bình luận
        });
        Route::get('/bai-viet', [RoomAdminController::class, 'index'])->name('pages-room'); // showw phòng ra 
        Route::get('/thong-bao', [NotificationAdminController::class, 'showNofi'])->name('pages-notification'); // showw thông báo
        Route::get('/chi-tiet-goi-tin', [PriceListAdminController::class, 'getPriceListDetail'])->name('get-pricelist'); // showw gói tin ra
        Route::get('/chi-tiet-goi-tin/chinh-sua-goi-tin/{id}', [PriceListAdminController::class, 'getPriceListID'])->name('post-pricelist');
        Route::put('/chi-tiet-goi-tin/chinh-sua-goi-tin/{id}', [PriceListAdminController::class, 'update'])->name('put-pricelist');
        
        Route::get('/blog', [BlogAdminController::class, 'Showblog'])->name('quan-li-blog'); // Hiển thị blog 

        Route::delete('/delete-blog/{id}', [BlogAdminController::class, 'deleteBlog'])->name('delete-blog'); // Xóa blog

        Route::get('/blogs/create', [BlogAdminController::class, 'create'])->name('blogs.create'); // Tạo blog

        Route::post('/blogs', [BlogAdminController::class, 'store'])->name('blogs.store'); // tạo blog

        Route::get('/role', [RoleAdminController::class, 'ShowRole'])->name('quan-li-role');
        Route::delete('/delete-role/{id}', [RoleAdminController::class, 'deleteRole'])->name('delete-role');



        Route::get('/goi-dang-tin', [PriceListAdminController::class, 'index'])->name('goi-dang-tin'); // router quản lí giá gói admin
        Route::get('/binh-luan', [CommentAdminController::class, 'index'])->name('pages-commet');
        Route::get('/bai-viet/chi-tiet-bai-viet/{id}', [RoomAdminController::class, 'getRoomID'])->name('pages-room-detail');
        Route::delete('/notification/{id}', [NotificationAdminController::class, 'destroyNofi'])->name('notification.destroy'); // xóa thông báo

    });

    // end Nguyen Huu Thang admin


});



// Route::get('/pages-edit-pricing', [IndexController::class, 'pages_edit_pricing'])->name('pages-edit-pricing');
// Nguyen Thai Toan user
Route::post('/xu-ly-dang-bai', [RoomController::class, 'check_post_room'])->name('show-posting-room');

// end Nguyen Thai Toan user


// Le Minh Huy user

// end Le Minh Huy user


// Tong Chi Nhan user


// end Tong Chi Nhan user


// Vo Tan Luon user


// end Vo Tan Luon User

// Nguyen Huu Thang user
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::group(['prefix' => 'tai-khoan', 'middleware' => 'auth'], function () {
    Route::get('/', [UserController::class, 'show'])->name('profileus');
    Route::get('/chinh-sua-bai-viet/{id}', [RoomController::class, 'page_edit_posting'])->name('edit-posting');
    Route::get('/dang-ky-thanh-vien',[MemberregistrationController::class,'index'])->name('register-member');
    Route::post('/dang-ky-thanh-vien',[MemberregistrationController::class,'store'])->name('check-register-member');

});
// end Nguyen Huu Thang user
Route::group(['prefix' => 'bai-viet'], function () {
    //binh luan mhuy
    Route::post('/comments', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');
    Route::get('/xem-bai-viet/{id}/', [CommentController::class, 'index'])->name('comments.index'); 
    Route::get('/rooms/{id}/comments/all', [CommentController::class, 'showAll'])->name('comments.showAll');

    // Nguyen Huu Thăng

});
