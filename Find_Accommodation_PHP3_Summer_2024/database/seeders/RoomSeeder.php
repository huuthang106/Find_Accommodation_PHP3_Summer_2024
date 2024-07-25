<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\User;
use App\Models\Areas;
use App\Models\Prices;
use App\Models\Category;
use Carbon\Carbon;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Đảm bảo bảng liên quan đã có dữ liệu
        if (User::count() < 1 || Areas::count() < 1 || Prices::count() < 1 || Category::count() < 1) {
            $this->command->info('Tạo dữ liệu mẫu cho các bảng liên quan trước khi chạy RoomSeeder.');
            return;
        }

        $faker = \Faker\Factory::create('vi_VN');

        $titles = [
            'Căn hộ đẹp gần trung tâm thành phố',
            'Phòng trọ tiện nghi ở khu vực yên tĩnh',
            'Chung cư cao cấp tại quận 1',
            'Nhà ở cho thuê gần trường học',
            'Căn hộ 2 phòng ngủ, giá rẻ',
        ];

        $descriptions = [
            'Căn hộ rộng rãi với đầy đủ tiện nghi, gần các điểm tham quan và dịch vụ cần thiết.',
            'Phòng trọ sạch sẽ, yên tĩnh, gần công viên và khu vực thương mại.',
            'Chung cư mới xây dựng, nội thất hiện đại, nằm ở vị trí đắc địa của quận 1.',
            'Nhà cho thuê gần các trường học và bệnh viện, môi trường sống trong lành.',
            'Căn hộ 2 phòng ngủ, giá cả hợp lý, thuận tiện cho việc di chuyển và sinh hoạt.',
        ];

        foreach (range(1, 10) as $index) {
            Room::create([
                'title' => $faker->randomElement($titles),
                'description' => $faker->randomElement($descriptions),
                'price' => $faker->randomFloat(2, 500000, 5000000),
                'phone' => $faker->numerify('##########'),
                'address' => $faker->address,
                'quantity' => $faker->numberBetween(1, 10),
                'longitude' => $faker->longitude,
                'latitude' => $faker->latitude,
                'view' => $faker->numberBetween(0, 1000),
                'status' => $faker->boolean(90),
                'user_id' => User::inRandomOrder()->first()->id, // Lấy người dùng ngẫu nhiên
                'area_id' => Areas::inRandomOrder()->first()->id, // Lấy khu vực ngẫu nhiên
                'price_id' => Prices::inRandomOrder()->first()->id, // Lấy giá ngẫu nhiên
                'category_id' => Category::inRandomOrder()->first()->id, // Lấy loại phòng ngẫu nhiên
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ]);
        }
    }
}
