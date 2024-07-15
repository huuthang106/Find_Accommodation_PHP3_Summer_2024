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
            //
            'price_range' => $this->faker->word(), // Tạo một từ ngẫu nhiên cho phạm vi giá
            'status' => $this->faker->boolean(),  
        ];
    }
}
