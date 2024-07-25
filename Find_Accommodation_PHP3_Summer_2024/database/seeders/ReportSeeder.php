<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Report;
use App\Models\User;
use App\Models\Room;
use Carbon\Carbon;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo các bản ghi mẫu trong bảng users và rooms nếu chưa có
        $users = User::factory()->count(5)->create(); // Tạo 5 người dùng
        $rooms = Room::factory()->count(5)->create(); // Tạo 5 phòng

        // Tạo các bản ghi mẫu trong bảng reports
        Report::create([
            'message' => 'Tài khoản này spam.',
            'status' => true,
            'user_id' => $users->first()->id, // Sử dụng ID của người dùng đầu tiên
            'room_id' => $rooms->first()->id, // Sử dụng ID của phòng đầu tiên
            'report_id' => $users->skip(1)->first()->id, // Sử dụng ID của người dùng thứ hai
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Report::create([
            'message' => 'Báo cáo phòng không đúng mô tả.',
            'status' => false,
            'user_id' => $users->skip(1)->first()->id, // Sử dụng ID của người dùng thứ hai
            'room_id' => $rooms->skip(1)->first()->id, // Sử dụng ID của phòng thứ hai
            'report_id' => $users->skip(2)->first()->id, // Sử dụng ID của người dùng thứ ba
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

       
    }
}
