<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prices;
use Carbon\Carbon;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo dữ liệu mẫu cụ thể
        Prices::create([
            'price_range' => 'Dưới 1 triệu',
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Tạo nhiều dữ liệu mẫu ngẫu nhiên
        Prices::factory()->count(10)->create();
    }
}
