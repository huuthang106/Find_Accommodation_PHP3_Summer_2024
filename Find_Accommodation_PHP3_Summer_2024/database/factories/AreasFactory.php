<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AreasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cities = [
            'Hà Nội',
            'TP. Hồ Chí Minh',
            'Đà Nẵng',
            'Hải Phòng',
            'Cần Thơ',
            'Hạ Long',
            'Huế',
            'Nha Trang',
            'Vũng Tàu',
            'Thái Nguyên',
        ];

        return [
            'name' => $this->faker->randomElement($cities), // Lấy ngẫu nhiên tên thành phố từ danh sách
        ];
    }
}

