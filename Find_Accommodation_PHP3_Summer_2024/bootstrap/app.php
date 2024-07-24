<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        using: function () {
            $adminRoute = [
                'area-admin.php',
                'blog-admin.php',
                'category-admin.php',
                'comment-admin.php',
                'favourite-admin.php',
                'friendlist-admin.php',
                'home-admin.php',
                'location-admin.php',
                'memberregistration-admin.php',
                'notification-admin.php',
                'profile-admin.php',
                'price-list-admin.php',
                'report-admin.php',
                'room-admin.php',
                'transaction-admin.php',
                'trash-admin.php',
                'user-admin.php',
            ];
            $userRoute = [
                'area.php',
                'blog.php',
                'category.php',
                'comment.php',
                'favourite.php',
                'friendlist.php',
                'home.php',
                'location.php',
                'memberregistration.php',
                'notification.php',
                'profile.php',
                'price-list.php',
                'report.php',
                'room.php',
                'transaction.php',
                'trash.php',
                'user.php',
            ];
            foreach ($adminRoute as $route) {
                Route::middleware('web')->prefix('admin')->name('admin.')->group(base_path("routes/admin/{$route}"));
            }
            foreach($userRoute as $route){
                Route::middleware('web')->prefix('home')->name('admin.')->group(base_path("routes/client/{$route}"));
            }
        },

    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
