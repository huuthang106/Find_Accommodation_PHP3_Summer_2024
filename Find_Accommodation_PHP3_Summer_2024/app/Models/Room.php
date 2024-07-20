<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    // Định nghĩa mối quan hệ belongsTo với model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    protected $fillable = [
        'Title',
        'Description',
        'Price',
        'Phone',
        'Address',
        'Category_id',
        'quantity',
        'user_id'
    ];

}
