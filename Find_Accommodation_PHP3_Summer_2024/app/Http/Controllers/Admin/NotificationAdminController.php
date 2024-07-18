<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy tất cả thông báo từ cơ sở dữ liệu và phân trang
        $notification = Notification::paginate(10);

        // foreach ($thongbao as $item) {
        //     dd($item);
        // }

        // Đếm số lượng thông báo 
        // $notificationCount = Notification::all('status')->count();
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();

        // Truyền dữ liệu tới view
        return view('admincp.pages-notification', compact('notification', 'notificationCount', 'unreadNotifications'));
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
        $notifications = Notification::where('id', $id)->get();

        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        // Hiển thị giao diện Chi tiết thông báo admin
        return view('admincp.pages-notification-detail', compact('notifications', 'notificationCount', 'unreadNotifications'));
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
        // Lấy thông báo dựa trên ID
        $notifications = Notification::find($id);

        // Kiểm tra xem thông báo có tồn tại không
        if ($notifications) {
            // Cập nhật trạng thái thông báo
            $notifications->status = 0;
            $notifications->save();

            return redirect()->route('pages-notification')->with('success', 'Thông báo đã được cập nhật.');
        }

        return redirect()->route('pages-notification')->with('error', 'Thông báo không tồn tại.');
    }

    public function softDeleteAll()
    {
        // Cập nhật trạng thái của tất cả các thông báo thành 3 để ẩn đi
        Notification::query()->update(['status' => 3]);

        // Redirect về trang trước đó hoặc trang chủ
        return back()->with('success', 'Đã xóa mềm tất cả các thông báo.');
    }

    // public function deleteAll()
    // {
    //     // Xóa 
    //     Notification::query()->delete();

    //     // Redirect về trang trước đó hoặc trang chủ
    //     return back()->with('success', 'Đã xóa ');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function tables_advanced()
    {
        // Đếm số lượng đã xem hoặc chưa xem (0 là đã xem, 1 là chưa xem)
        $notificationCount = Notification::where('status', 1)->count();

        // Lấy thông báo chưa xem
        $unreadNotifications = Notification::where('status', 1)->get();
        return view('admincp.tables-advanced', compact('notificationCount', 'unreadNotifications'));
    }
}
