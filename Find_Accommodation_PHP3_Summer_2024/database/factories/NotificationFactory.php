<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
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
            'type' => $this->faker->word,
            'data' => $this->faker->optional()->sentence,
            'message' => $this->faker->sentence,
            'status' => $this->faker->boolean,
            'user_id' => User::factory(),
            'room_id' => Room::factory(),
        ];
    }
}
