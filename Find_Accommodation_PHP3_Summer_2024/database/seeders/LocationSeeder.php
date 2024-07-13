<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;
use Carbon\Carbon;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Location::create([
            'name' => 'Vip ',
            'description' => 'Bài đăng được lên vị trí vip',
            'address' => 'vị trí vip',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'end_at'=>'2024-8-13 00:00:00',
        ]);

    }
}
