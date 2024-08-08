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
        if ($request->user() && !in_array($request->user()->role, [0, 2])) {
            // Nếu không phải là role 0 hoặc 2, chuyển hướng về trang khác, ví dụ trang đăng nhập
            return redirect('/home')->with('error', 'You are not authorized to access this page.');
        }
        return $next($request);
    }
}
