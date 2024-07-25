<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterAdminController extends Controller
{
    //
    public function show_register()
    {
        return view('admincp.pages-register');
    }
    public function check_register()
    {
        // Bắt lỗi
        request()->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ], [
            'username.required' => 'Vui lòng nhập tên người dùng.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Địa chỉ email đã tồn tại trong hệ thống.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password_confirmation.required' => 'Vui lòng nhập lại mật khẩu để xác nhận.',
            'password_confirmation.same' => 'Mật khẩu xác nhận không khớp với mật khẩu đã nhập.',
        ]);
        $data = request()->all('username', 'email');
        $data['password'] = bcrypt(request('password'));
        User::create($data);
        return redirect()->route('admin.pages-login-admin');
    }
}
