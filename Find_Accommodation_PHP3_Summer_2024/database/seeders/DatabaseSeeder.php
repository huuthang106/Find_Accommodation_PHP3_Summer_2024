<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Acreage;
use App\Models\Room;
use App\Models\Category;
use App\Models\Prices;
use App\Models\PriceList;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Acreage::factory(10)->create();
        Category::factory(10)->create();
        Prices::factory(10)->create();
        PriceList::factory(10)->create();
        Room::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([
        //     // Userse::class,
        //     // RoomSeeder::class,
        // ]);
    }
}
