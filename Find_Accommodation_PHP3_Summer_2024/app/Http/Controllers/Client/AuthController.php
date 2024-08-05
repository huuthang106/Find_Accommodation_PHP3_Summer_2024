<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function pages_login()
    {
        return view('layouts.layout-user');
    }
    public function check_login()
    {
        // Bắt lỗi
        request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ], [
            'email.exists' => 'Email không tồn tại trong hệ thống.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
        ]);

        $credentials = request()->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Authentication passed
            // dd(Auth::check());
            return redirect()->route('home');
        }

        // Authentication failed
        return redirect()->back()->withErrors([
            'password' => 'Mật khẩu không chính xác.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
