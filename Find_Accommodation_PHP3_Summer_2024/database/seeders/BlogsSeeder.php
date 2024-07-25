<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blogs;
use Faker\Factory as Faker;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN');

        $titles = [
            '5 mẹo để tìm phòng trọ phù hợp',
            'Những điều cần lưu ý khi thuê nhà trọ lần đầu',
            'Tìm phòng trọ giá rẻ mà chất lượng tốt',
            'Hướng dẫn kiểm tra tình trạng phòng trọ trước khi thuê',
            'Các yếu tố quan trọng khi lựa chọn khu vực thuê nhà trọ'
        ];

        $descriptions = [
            'Bạn đang tìm kiếm một phòng trọ? Dưới đây là 5 mẹo giúp bạn chọn phòng trọ phù hợp với nhu cầu và ngân sách của mình.',
            'Thuê nhà trọ lần đầu có thể gây ra nhiều khó khăn. Bài viết này sẽ hướng dẫn bạn những điều cần lưu ý để có sự lựa chọn tốt nhất.',
            'Tìm phòng trọ giá rẻ không có nghĩa là bạn phải hy sinh chất lượng. Xem các mẹo trong bài viết này để tìm được phòng trọ vừa rẻ vừa tốt.',
            'Trước khi ký hợp đồng thuê phòng trọ, hãy kiểm tra tình trạng của phòng để đảm bảo bạn không gặp phải các vấn đề không mong muốn.',
            'Lựa chọn khu vực thuê nhà trọ có thể ảnh hưởng đến chất lượng cuộc sống của bạn. Tìm hiểu các yếu tố quan trọng cần xem xét trong bài viết này.'
        ];

        foreach (range(1, 10) as $index) {
            Blogs::create([
                'title' => $faker->randomElement($titles), // Tiêu đề bài viết
                'description' => $faker->randomElement($descriptions), // Mô tả bài viết
                'user_id' => $faker->numberBetween(1, 10), // ID người dùng
                'status' => $faker->numberBetween(1, 4), // Trạng thái bài viết
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ]);
        }
    }
}
