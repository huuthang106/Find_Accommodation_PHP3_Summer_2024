<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Areas;

class AreasSeeder extends Seeder
{
    public function run(): void
    {
        Areas::factory(5)->create(); // Đảm bảo có ít nhất 5 khu vực
    }
}

