<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blogs;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogs>
 */
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
        return [
            'title' => $this->faker->sentence(6, true),
            'description' => $this->faker->paragraph,
            'user_id' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->numberBetween(1, 4),  // Provide a default status value
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
