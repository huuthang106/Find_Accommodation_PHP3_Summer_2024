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
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'description' => $this->faker->sentence(),
            'Post_Posting' => 'Personal Apartments, Videos, Featured Posts',
            'Video_Posting' => 'Yes',
            'Support' => 'Email, 24/7 Phone Support, Strategic Consultation',
            'Additional_Features' => 'Up to 20 Posts/Month, Featured Advertising',
            'status' => $status,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
    
}
