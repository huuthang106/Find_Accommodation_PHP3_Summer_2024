<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use Carbon\Carbon;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Comment::create([
          'content'=>'Trọ này đẹp',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);
    }
}
