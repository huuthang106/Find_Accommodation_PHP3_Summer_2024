<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Areas;
use App\Models\User;
use App\Models\Category;
use App\Models\Prices;
use Faker\Factory as Faker;
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
        $faker = Faker::create('vi_VN'); // Sử dụng ngôn ngữ tiếng Việt
        return [
            //
            'title' => $faker->sentence,
            'description' => $faker->paragraph,
            'price' => $faker->randomFloat(2, 50, 500), // Giá ngẫu nhiên từ 50 đến 500
            'phone' => $faker->numerify('##########'), // Số điện thoại ngẫu nhiên 10 chữ số
            'address' => $faker->city,
            'quantity' => $faker->randomNumber(2),
            'longitude' => $faker->longitude,
            'latitude' => $faker->latitude,
            'view' => $faker->numberBetween(0, 1000),
            'status' => $faker->boolean(90), // 90% khả năng là true (hoạt động)
            'area_id' => Areas::factory()->create()->id, // Tạo ngẫu nhiên một area và lấy id của nó
            'user_id' => User::factory()->create()->id, // Tạo ngẫu nhiên một user và lấy id của nó
            'price_id' => Prices::factory()->create()->id, // Tạo ngẫu nhiên một price và lấy id của nó
            'category_id' => Category::factory()->create()->id, // Tạo ngẫu nhiên một category và lấy id của nó
            'created_at' => $faker->dateTimeBetween('-1 year', 'now'), // Ngày tạo trong vòng 1 năm trở lại đây
            'updated_at' => now(),
        ];
    }
}
