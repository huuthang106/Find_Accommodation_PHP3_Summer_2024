<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo hai danh mục cơ bản
        Category::create([
            'name' => 'Căn hộ',
            'status' => 1, // Hoạt động
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Category::create([
            'name' => 'Phòng trọ',
            'status' => 1, // Hoạt động
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
