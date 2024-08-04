<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
{
    return true;
}

public function rules()
{
    return [
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:6',
    ];
}

public function messages()
{
    return [
        'email.unique' => 'Email đã được sử dụng.',
        'email.required' => 'Vui lòng nhập địa chỉ email.',
        'email.email' => 'Địa chỉ email không hợp lệ.',
        'password.required' => 'Vui lòng nhập mật khẩu.',
        'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
    ];
}
}