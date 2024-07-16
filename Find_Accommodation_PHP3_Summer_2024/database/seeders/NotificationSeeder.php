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
            'user_id' => 1,
            'room_id' => 1,
            'type' => 'Thông báo đăng bài',
            'data' => 'Nguyễn Văn A đã đăng trọ mới ',
            'message' => '=A đã đăng một trọ mới',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Notification::create([
            'user_id' => 1,
            'room_id' => 1,
            'type' => 'Thông báo đăng bài',
            'data' => 'Nguyễn Văn B đã đăng trọ mới ',
            'message' => '=B đã đăng một trọ mới',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Notification::create([
            'user_id' => 1,
            'room_id' => 1,
            'type' => 'Thông báo đăng bài',
            'data' => 'Nguyễn Văn C đã đăng trọ mới ',
            'message' => '=C đã đăng một trọ mới',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Notification::create([
            'user_id' => 1,
            'room_id' => 1,
            'type' => 'Thông báo đăng bài',
            'data' => 'Nguyễn Văn D đã đăng trọ mới ',
            'message' => '=D đã đăng một trọ mới',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Notification::create([
            'user_id' => 1,
            'room_id' => 1,
            'type' => 'Thông báo đăng bài',
            'data' => 'Nguyễn Văn E đã đăng trọ mới ',
            'message' => '=E đã đăng một trọ mới',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
