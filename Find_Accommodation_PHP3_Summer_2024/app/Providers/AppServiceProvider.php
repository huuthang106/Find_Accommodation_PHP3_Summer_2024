<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

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
        //
        View::composer('layouts.layout-user', function ($view) {
            // Logic để lấy dữ liệu categories từ database
            $categories = Category::where('status', 1)->get();
            // Truyền dữ liệu categories vào view
            $view->with('categories', $categories);
        });
    }
}
