<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Căn hộ', 'Phòng trọ']), // Chọn ngẫu nhiên giữa "Căn hộ" và "Phòng trọ"
            'status' => $this->faker->randomElement([1, 2]), // Chọn ngẫu nhiên giá trị status là 1 hoặc 2
            'parent_id' => Category::inRandomOrder()->first()->id ?? null, // Chọn một parent_id ngẫu nhiên từ bảng categories hoặc null nếu không có
        ];
    }
}
