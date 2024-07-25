<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route mẫu để lấy thông tin người dùng hiện tại
Route::middleware('api')->get('/user', function (Request $request) {
    return $request->user();
});

// Ví dụ thêm một route API khác
Route::middleware('api')->get('/example', function () {
    return response()->json(['message' => 'This is an example route.']);
});
