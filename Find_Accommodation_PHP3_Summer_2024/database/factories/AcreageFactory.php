<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acreage>
 */
class AcreageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'distance' => $this->faker->randomFloat(2, 1, 100), // Khoảng cách ngẫu nhiên từ 1 đến 100 (với hai chữ số thập phân)
            'status' => $this->faker->boolean(90), // 90% khả năng là true (hoạt động)
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Ngày tạo trong vòng 1 năm trở lại đây
            'updated_at' => now(),
        ];
    }
}
