<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagesmember extends Model
{
    use HasFactory;
    protected $fillable = [
        // cho phép thêm hàng loạt dữ liệu Nguyen Huu Thang
        'memberregistration_id',
        'filename',
    ];
}
