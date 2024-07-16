<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class LoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && $request->user()->role !== 1) {
            // Nếu không phải là admin, chuyển hướng về trang khác, ví dụ trang đăng nhập
            return redirect('/login')->with('error', 'You are not authorized to access this page.');
        }
        return $next($request);
    }
}
