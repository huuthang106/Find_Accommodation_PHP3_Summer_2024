<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Room;
use App\Models\Comment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * protected $model = Comment::class;
     * @return array<string, mixed>
     */
    protected $model = Comment::class;
    public function definition(): array
    {
        return [
            'content' => $this->faker->sentence,
            'status' => $this->faker->boolean,
            'user_id' => User::factory()->create()->id,
            'room_id' => Room::factory()->create()->id,
        ];
    }
}
