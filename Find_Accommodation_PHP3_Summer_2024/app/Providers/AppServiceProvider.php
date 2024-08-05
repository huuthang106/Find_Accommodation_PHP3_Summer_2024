<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Hiển thị 3 loại trọ có số lượng phòng nhiều nhất [Nguyễn Thái Toàn]
        View::composer('layouts.layout-user', function ($view) {
            // Logic to fetch categories with their motel counts, order by motel count, and limit to 3
            $categories = Category::where('status', 1)
                ->withCount('rooms') // Add a count of related motels
                ->orderBy('rooms_count', 'desc') // Order by the count of motels in descending order
                ->take(3) // Limit to the top 3 categories
                ->get();
            // dd($categories);
            // Pass the categories to the view
            $view->with('categories', $categories);
        });
        View::composer('index', function ($view) {
            // Logic để lấy dữ liệu categories từ database
            $categories = Category::where('status', 1)->get();
            // Truyền dữ liệu categories vào view
            // dd( $categories   );     
            $view->with('categories', $categories);
        });
        View::composer('layouts.app', function ($view) {
            $notificationCount = Notification::where('status', 1)->orderBy('created_at', 'desc')->count();
            // Lấy thông báo chưa xem
            $unreadNotifications = Notification::where('status', 1)->orderByDesc('id')->get();
            $view->with('notificationCount', $notificationCount);
            $view->with('unreadNotifications', $unreadNotifications);
        });
    }
}
