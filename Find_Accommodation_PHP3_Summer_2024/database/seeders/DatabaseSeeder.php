<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Areas;
use App\Models\Room;
use App\Models\Category;
use App\Models\Prices;
use App\Models\PriceList;
use App\Models\Notification;
use App\Models\Blogs;
use App\Models\Report;
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
        Areas::factory(1)->create();
        Category::factory(10)->create();
        Prices::factory(10)->create();
        PriceList::factory(10)->create();
        Room::factory(10)->create();
        Notification::factory(10)->create();
        Blogs::factory(10)->create();
        Report::factory(10)->create();
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
