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
        $notifications = [
            [
                'user_id' => 1,
                'room_id' => 1,
                'type' => 'Thông báo đăng bài',
                'data' => 'Nguyễn Văn A đã đăng trọ mới tại khu vực A.',
                'message' => 'Nguyễn Văn A đã đăng một trọ mới tại khu vực A.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'room_id' => 2,
                'type' => 'Thông báo đăng bài',
                'data' => 'Lê Thị B đã cập nhật thông tin trọ tại khu vực B.',
                'message' => 'Lê Thị B đã cập nhật thông tin trọ tại khu vực B.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'room_id' => 3,
                'type' => 'Thông báo mới',
                'data' => 'Trần Văn C đã đặt lịch hẹn xem trọ tại khu vực C.',
                'message' => 'Trần Văn C đã đặt lịch hẹn xem trọ tại khu vực C.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 4,
                'room_id' => 4,
                'type' => 'Thông báo đăng bài',
                'data' => 'Phạm Thị D đã xóa trọ cũ tại khu vực D.',
                'message' => 'Phạm Thị D đã xóa trọ cũ tại khu vực D.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 5,
                'room_id' => 5,
                'type' => 'Thông báo cập nhật',
                'data' => 'Nguyễn Văn E đã thay đổi giá thuê trọ tại khu vực E.',
                'message' => 'Nguyễn Văn E đã thay đổi giá thuê trọ tại khu vực E.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 6,
                'room_id' => 6,
                'type' => 'Thông báo đăng bài',
                'data' => 'Hoàng Thị F đã đăng trọ mới tại khu vực F.',
                'message' => 'Hoàng Thị F đã đăng một trọ mới tại khu vực F.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 7,
                'room_id' => 7,
                'type' => 'Thông báo mới',
                'data' => 'Trí Văn G đã yêu cầu hỗ trợ về trọ tại khu vực G.',
                'message' => 'Trí Văn G đã yêu cầu hỗ trợ về trọ tại khu vực G.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 8,
                'room_id' => 8,
                'type' => 'Thông báo cập nhật',
                'data' => 'Lan Thị H đã cập nhật hình ảnh trọ tại khu vực H.',
                'message' => 'Lan Thị H đã cập nhật hình ảnh trọ tại khu vực H.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 9,
                'room_id' => 9,
                'type' => 'Thông báo đăng bài',
                'data' => 'Nam Văn I đã đăng trọ mới với ưu đãi tại khu vực I.',
                'message' => 'Nam Văn I đã đăng một trọ mới với ưu đãi tại khu vực I.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 10,
                'room_id' => 10,
                'type' => 'Thông báo mới',
                'data' => 'Hương Thị J đã yêu cầu thêm thông tin về trọ tại khu vực J.',
                'message' => 'Hương Thị J đã yêu cầu thêm thông tin về trọ tại khu vực J.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($notifications as $notification) {
            Notification::create($notification);
        }
    }
}
