<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PriceList;
use Carbon\Carbon;

class PriceListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dữ liệu mẫu
        $data = [
            [
                'price' => 100000, // Giá
                'description' => 'Gói cơ bản cho các bài đăng đơn giản.', // Mô tả
                'Post_Posting' => 'Đăng bài cơ bản',
                'Video_Posting' => 'Có',
                'Support' => 'Hỗ trợ qua email',
                'Additional_Features' => 'Không có tính năng bổ sung',
                'status' => 1,
            ],
            [
                'price' => 300000, // Giá
                'description' => 'Gói nâng cao với các tính năng bổ sung.', // Mô tả
                'Post_Posting' => 'Đăng bài nâng cao',
                'Video_Posting' => 'Có',
                'Support' => 'Hỗ trợ qua email và điện thoại',
                'Additional_Features' => 'Quảng cáo nổi bật',
                'status' => 2,
            ],
            [
                'price' => 500000, // Giá
                'description' => 'Gói VIP với các dịch vụ toàn diện.', // Mô tả
                'Post_Posting' => 'Đăng bài VIP',
                'Video_Posting' => 'Có',
                'Support' => 'Hỗ trợ 24/7 qua điện thoại và email',
                'Additional_Features' => 'Quảng cáo nổi bật, ưu đãi đặc biệt',
                'status' => 3,
            ],
            [
                'price' => 700000, // Giá
                'description' => 'Gói đặc biệt với các tính năng tối ưu.', // Mô tả
                'Post_Posting' => 'Đăng bài đặc biệt',
                'Video_Posting' => 'Có',
                'Support' => 'Hỗ trợ tận tình qua email và điện thoại',
                'Additional_Features' => 'Tính năng đặc biệt, ưu đãi cao',
                'status' => 1,
            ],
            [
                'price' => 900000, // Giá
                'description' => 'Gói siêu VIP với dịch vụ toàn diện nhất.', // Mô tả
                'Post_Posting' => 'Đăng bài siêu VIP',
                'Video_Posting' => 'Có',
                'Support' => 'Hỗ trợ VIP 24/7',
                'Additional_Features' => 'Ưu đãi lớn, quảng cáo nổi bật nhất',
                'status' => 2,
            ],
        ];

        foreach ($data as $item) {
            PriceList::create($item);
        }

      
    }
}
