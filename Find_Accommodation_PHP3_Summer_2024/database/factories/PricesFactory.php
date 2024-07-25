<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prices>
 */
class PricesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price_range' => $this->faker->randomElement(['Dưới 1 triệu', '1 triệu - 2 triệu', '2 triệu - 3 triệu', 'Trên 3 triệu']), // Các phạm vi giá
            'status' => $this->faker->boolean(), // Giá trị ngẫu nhiên cho trạng thái
        ];
    }
}
