<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Report;
use Carbon\Carbon;
class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Report::create([
            'message' =>'tai khoang nay spam',
            'created_at' =>Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
