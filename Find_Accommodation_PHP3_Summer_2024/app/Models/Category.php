<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // Trong model Category
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
