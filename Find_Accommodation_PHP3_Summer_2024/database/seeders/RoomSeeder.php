<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
use Carbon\Carbon;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Room::create([
            'title' => 'Cozy Apartment in the City Center',
            'description' => 'A beautiful and cozy apartment located in the heart of the city. Fully furnished and close to all amenities.',
            'price' => 1500.00,
            'phone' => '1234567890',
            'area' => '75 sqm',
            'quantity' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'longitude' => '105.841171',
            'latitude' => '21.028511',
            'view' => 10,
            'status' => 1,
        ]);
    }
}
