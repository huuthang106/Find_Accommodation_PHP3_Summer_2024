<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PriceList>
 */
class PriceListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement([1, 2, 3]); // Chọn ngẫu nhiên giá trị 1, 2 hoặc 3
    
        return [
            'price' => $this->faker->randomFloat(2, 100000, 2000000), // Giá ngẫu nhiên từ 100.000 đến 2.000.000
            'description' => $this->faker->sentence(), // Mô tả ngẫu nhiên
            'Post_Posting' => $this->faker->sentence(), // Đăng bài
            'Video_Posting' => $this->faker->randomElement(['Có', 'Không']), // Có hoặc không
            'Support' => $this->faker->sentence(), // Hỗ trợ
            'Additional_Features' => $this->faker->sentence(), // Các tính năng bổ sung
            'status' => $status, // Trạng thái
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
