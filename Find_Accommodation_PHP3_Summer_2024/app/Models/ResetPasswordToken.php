<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResetPasswordToken extends Model
{
    use HasFactory;

    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'password_reset_tokens';

    public $timestamps = false;

    // Bỏ qua cột id, vì bảng không có khóa chính là id
    public $incrementing = false;
    protected $primaryKey = 'email';
    // public $timestamps = true; // Bật timestamps nếu bạn có cột created_at và updated_at

    // Các thuộc tính của bảng
    protected $fillable = ['email', 'token'];
    // Tạo mối quan hệ 1 - 1 giữ bảng User và bảng password_reset_tokens
    public function AdminResetPassword()
    {
        return $this->hasOne(User::class, 'email', 'email');
    }
    // định nghĩa một "local scope" trong Laravel. 
    // Local scopes cho phép bạn định nghĩa các truy vấn thường xuyên sử dụng mà có thể được tái sử dụng trong toàn bộ ứng dụng. 
    // Scope này được dùng để kiểm tra và lấy thông tin của một token cụ thể.
    public function scopeCheckToken($request, $token)
    {
        return $request->where('token', $token)->firstOrFail();
    }
}
