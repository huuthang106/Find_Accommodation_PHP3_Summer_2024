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
        //
        Prices::create([
            'price_range' =>'200000',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),

        ]);

    }
}
