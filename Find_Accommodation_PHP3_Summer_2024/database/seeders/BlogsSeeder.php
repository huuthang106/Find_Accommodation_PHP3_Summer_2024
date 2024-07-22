<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
 // Đổi từ Blogs thành Blog
use Carbon\Carbon;
use App\Models\Blogs;
class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Chèn một bản ghi cụ thể
        Blogs::create([
            'title' => 'Blog Post 1',
            'description' => 'Description for blog post 1',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Sử dụng factory để tạo thêm 10 bản ghi dữ liệu mẫu
        Blogs::factory(10)->create();
    }
}
