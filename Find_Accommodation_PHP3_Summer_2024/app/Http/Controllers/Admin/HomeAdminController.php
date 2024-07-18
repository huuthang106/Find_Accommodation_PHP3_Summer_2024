<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notification;

class HomeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //



    }
    public function extras_contacts()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.extras-contacts', compact('notificationCount', 'unreadNotifications'));
    }
    public function homeAdmin()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        $user = User::take(6)->get();
        // Truyền dữ liệu tới view
        return view('admincp.home', compact('notificationCount', 'unreadNotifications', 'user'));
        // return view('admincp.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
