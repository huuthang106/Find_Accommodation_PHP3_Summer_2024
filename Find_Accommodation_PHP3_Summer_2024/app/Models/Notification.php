<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use HasFactory;
    // use SoftDeletes;

    // protected $dates = ['update_at']; // Đảm bảo cột deleted_at được sử dụng để xóa mềm

    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'notifications';

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'user_id',
        'room_id',
        'type',
        'data',
        'message',
        'created_at',
        'updated_at'
    ];
}
