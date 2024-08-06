<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memberregistration extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'description',
        'idenerregistra_number',
        'phone',
        'gender',
        'status',
        'user_id'
        // Các trường khác nếu có
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function imgmember(){
        return $this->hasMany(Imagesmember::class);
    }
}
