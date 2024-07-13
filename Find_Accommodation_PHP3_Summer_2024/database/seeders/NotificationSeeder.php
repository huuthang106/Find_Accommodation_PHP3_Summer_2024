<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notification;
use Carbon\Carbon;
class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Notification::create([
            'type' => 'Thông báo đăng bài',
            'data' => 'Nguyễn Văn A đã đăng trọ mới ',
            'message' => '=A đã đăng một trọ mới',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
