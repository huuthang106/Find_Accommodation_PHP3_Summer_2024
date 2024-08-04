<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Users first to ensure user IDs are available for other seeds
        $this->call(UserSeeder::class);

        // Seed Areas to ensure area IDs are available for other seeds
        $this->call(AreasSeeder::class);

        // Seed Categories
        $this->call(CategorySeeder::class);

        // Seed Prices
        $this->call(PricesSeeder::class);

        // Seed PriceLists
        $this->call(PriceListSeeder::class);

        // Seed Rooms after all referenced tables are seeded
        $this->call(RoomSeeder::class);

        // Seed Notifications, Blogs, and Reports last
        $this->call(NotificationSeeder::class);
        $this->call(BlogsSeeder::class);
        $this->call(ReportSeeder::class);

        // Seed Comments last if it depends on Rooms and Users
        $this->call(CommentSeeder::class);
        $this->call(MemberregistrationSeeder::class);
    }
}
