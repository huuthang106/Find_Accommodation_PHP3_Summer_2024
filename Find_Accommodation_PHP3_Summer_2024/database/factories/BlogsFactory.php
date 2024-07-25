<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blogs;

class BlogsFactory extends Factory
{
    protected $model = Blogs::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('vi_VN'); // Sử dụng ngôn ngữ tiếng Việt

        return [
            'title' => $faker->sentence(6, true), // Tiêu đề bài viết
            'description' => $faker->paragraph, // Mô tả bài viết
            'user_id' => $faker->numberBetween(1, 10), // ID người dùng ngẫu nhiên
            'status' => $faker->numberBetween(1, 4), // Trạng thái bài viết
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
