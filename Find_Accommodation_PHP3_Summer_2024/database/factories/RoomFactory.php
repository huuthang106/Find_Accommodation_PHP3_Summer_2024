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
            'title' => $faker->sentence(6, true), // Tiêu đề phòng bằng tiếng Việt
            'description' => $faker->paragraph(3, true), // Mô tả phòng bằng tiếng Việt
            'price' => $faker->randomFloat(2, 500000, 5000000), // Giá phòng
            'phone' => $faker->numerify('##########'), // Số điện thoại
            'address' => $faker->address, // Địa chỉ
            'quantity' => $faker->numberBetween(1, 10), // Số lượng phòng
            'longitude' => $faker->longitude, // Kinh độ
            'latitude' => $faker->latitude, // Vĩ độ
            'view' => $faker->numberBetween(0, 1000), // Số lượt xem
            'status' => $faker->boolean(90), // Trạng thái (90% là true)
            'user_id' => User::inRandomOrder()->first()->id, // Lấy người dùng ngẫu nhiên
            'area_id' => Areas::inRandomOrder()->first()->id, // Lấy khu vực ngẫu nhiên
            'price_id' => Prices::inRandomOrder()->first()->id, // Lấy giá ngẫu nhiên
            'category_id' => Category::inRandomOrder()->first()->id, // Lấy loại phòng ngẫu nhiên
            'created_at' => $faker->dateTimeBetween('-1 year', 'now'), // Ngày tạo
            'updated_at' => now(), // Ngày cập nhật
        ];
    }
}
