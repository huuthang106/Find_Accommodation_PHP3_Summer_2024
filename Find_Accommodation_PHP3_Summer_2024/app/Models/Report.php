<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'reports';

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'message',
        'status',
        'user_id',
        'room_id',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
    public function report()
    {
        return $this->belongsTo(User::class, 'report_id');
    }
}
