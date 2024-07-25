<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'message' => $this->faker->sentence(),
            'status' => $this->faker->boolean(),
            'user_id' => \App\Models\User::factory(), // Tạo người dùng ngẫu nhiên
            'room_id' => \App\Models\Room::factory(), // Tạo phòng ngẫu nhiên
            'report_id' => \App\Models\User::factory(), // Tạo báo cáo ngẫu nhiên (hoặc có thể là một người dùng khác)
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => function (array $attributes) {
                return $this->faker->dateTimeBetween($attributes['created_at'], 'now');
            },
        ];
    }
}
