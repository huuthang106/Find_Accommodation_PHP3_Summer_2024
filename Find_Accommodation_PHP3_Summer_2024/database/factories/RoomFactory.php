<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Acreage;
use App\Models\User;
use App\Models\Category;
use App\Models\Prices;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
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
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 50, 500), // Giá ngẫu nhiên từ 50 đến 500
            'phone' => $this->faker->numberBetween(10, 13),
            'area' => $this->faker->city,
            'quantity' => $this->faker->randomNumber(2),
            'longitude' => $this->faker->longitude,
            'latitude' => $this->faker->latitude,
            'view' => $this->faker->numberBetween(0, 1000),
            'status' => $this->faker->boolean(90), // 90% khả năng là true (hoạt động)
            'acreage_id' => Acreage::factory()->create()->id, // Tạo ngẫu nhiên một acreage và lấy id của nó
            'user_id' => User::factory()->create()->id, // Tạo ngẫu nhiên một user và lấy id của nó
            'price_id' => Prices::factory()->create()->id, // Tạo ngẫu nhiên một price và lấy id của nó
            'category_id' => Category::factory()->create()->id, // Tạo ngẫu nhiên một category và lấy id của nó
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Ngày tạo trong vòng 1 năm trở lại đây
            'updated_at' => now(),
        ];
    }
}
