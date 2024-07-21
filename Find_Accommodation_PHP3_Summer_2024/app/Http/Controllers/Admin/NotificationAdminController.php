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

    

        // Truyền dữ liệu tới view
        return view('admincp.manages.pages-notification', compact('notification'));
    }
    public function showNofi()
    {
        // Lấy tất cả thông báo từ cơ sở dữ liệu và phân trang, loại trừ các thông báo có status = 5
        $notification = Notification::where('status', '!=', 5)->paginate(10);
    
        // Truyền dữ liệu tới view
        return view('admincp.manages.pages-notification', compact('notification'));
    }
    
    public function destroyNofi(string $id)
    {
        $notification = Notification::find($id);
        if ($notification) {
            $notification->status = 5; // Đánh dấu thông báo là đã xóa
            $notification->save();
            return redirect()->back()->with('success', 'Thông báo đã được ẩn thành công.');
        }
        return redirect()->back()->with('error', 'Không tìm thấy thông báo.');
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

     
        // Hiển thị giao diện Chi tiết thông báo admin
        return view('admincp.details.pages-notification-detail', compact('notifications'));
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
     
        return view('admincp.tables-advanced');
    }
}
