<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\User;
use App\Models\Room;
use Carbon\Carbon;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo một số người dùng và phòng trọ mẫu
        $users = User::factory()->count(5)->create(); // Tạo 5 người dùng
        $rooms = Room::factory()->count(3)->create(); // Tạo 3 phòng trọ

        // Khởi tạo Faker
        $faker = Faker::create('vi_VN');

        // Danh sách bình luận mẫu về phòng trọ
        $comments = [
            'Phòng này rất sạch sẽ và thoáng mát, tôi rất hài lòng.',
            'Giá thuê hợp lý, vị trí thuận tiện, gần trung tâm.',
            'Chủ nhà thân thiện, dịch vụ tốt, phòng đẹp.',
            'Phòng hơi nhỏ nhưng đầy đủ tiện nghi, giá cả phải chăng.',
            'Khu vực yên tĩnh, phù hợp cho gia đình hoặc sinh viên.',
            'Nhà vệ sinh sạch sẽ, phòng được trang bị đầy đủ thiết bị.',
            'Không gian sống thoải mái, gần các cửa hàng và quán ăn.',
            'Phòng có điều hòa, tiện nghi đầy đủ, chỉ có vấn đề về wifi hơi yếu.',
            'Chỗ ở tốt, có sân vườn nhỏ để thư giãn, gần công viên.',
            'Môi trường xung quanh thân thiện, phòng được dọn dẹp thường xuyên.',
        ];

        // Tạo nhiều bình luận mẫu liên quan đến phòng trọ
        foreach (range(1, 10) as $index) {
            Comment::create([
                'content' => $faker->randomElement($comments), // Chọn một bình luận ngẫu nhiên từ danh sách
                'status' => $faker->boolean, // Trạng thái bình luận
                'user_id' => $users->random()->id, // Chọn ngẫu nhiên một người dùng
                'room_id' => $rooms->random()->id, // Chọn ngẫu nhiên một phòng trọ
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
