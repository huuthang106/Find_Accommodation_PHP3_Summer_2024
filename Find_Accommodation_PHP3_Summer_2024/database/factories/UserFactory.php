<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('vi_VN'); // Tạo Faker với locale tiếng Việt

        return [
            'username' => $faker->userName(),
            'email' => $faker->unique()->safeEmail(),
            'password' => Hash::make('password'), // Mật khẩu mặc định là 'password'
            'phone' => $faker->numerify('0##########'), // Giới hạn độ dài số điện thoại
            'address' => $faker->address(),
            'role' => $faker->boolean(10), // 10% cơ hội là admin
            'balance' => $faker->randomFloat(2, 0, 10000), // Số dư ngẫu nhiên từ 0 đến 10000 với 2 chữ số thập phân
            'token' => Str::random(10), // Chuỗi ngẫu nhiên dài 10 ký tự
            'status' => 1,
            'provider' => null,
            'provider_id' => null,
            'provider_token' => null,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
