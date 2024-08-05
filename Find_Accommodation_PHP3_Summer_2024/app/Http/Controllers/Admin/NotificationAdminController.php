<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Str;

class NotificationAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Biến xóa mềm = 5
    const status_soft_delete = 5;
    // Biến Đã Xem = 0
    const status_da_xem = 0;
    // Biến Chưa Xem = 1;
    public function showNofi()
    {
        // Lấy tất cả thông báo từ cơ sở dữ liệu và phân trang, loại trừ các thông báo có status = 5
        $notification = Notification::where('status', '!=', Self::status_soft_delete)->orderByDesc('id')->get();
        // Duyệt qua mỗi report để giới hạn ký tự của title
        foreach ($notification as $item) {
            $item->type_limit = Str::limit($item->type, 15);
            $item->data_limit = Str::limit($item->data, 15);
            $item->message_limit = Str::limit($item->message, 15);
        }
        // Truyền dữ liệu tới view
        return view('admincp.manages.pages-notification', compact('notification'));
    }
    public function destroyNofi(string $id)
    {
        $notification = Notification::find($id);
        if ($notification) {
            $notification->status = Self::status_soft_delete; // Đánh dấu thông báo là đã xóa
            $notification->save();
            // return redirect()->back()->with('success', 'Thông báo đã được ẩn thành công.');
            return redirect()->route('admin.pages-notification')->with('showAlert', [
                'success' => 'Thông báo đã được xóa'
            ]);
        }
        return redirect()->back()->with('showAlert', [
            'not_found' => 'Thông báo không tồn tại.'
        ]);
    }
    public function viewAndChangeStatus($id)
    {
        // Tìm thông báo theo id
        $notifications = Notification::findOrFail($id);
        // if (!$notifications) {
        //     return redirect()->route('admin.notifications.index')->with('showAlert', [
        //         'not_found' => 'Thông báo không tồn tại.'
        //     ]);
        // }
        // Cập nhật trạng thái thông báo (ví dụ: đánh dấu là đã đọc)
        $notifications->status = Self::status_da_xem;; // hoặc trạng thái khác phù hợp với ứng dụng của bạn
        $notifications->save();

        // Hiển thị trang chi tiết thông báo
        return view('admincp.details.pages-notification-detail', compact('notifications'), ['id' => $id]);
    }
    public function softDeleteAll()
    {
        // Cập nhật trạng thái của tất cả các thông báo thành 5 để ẩn đi
        Notification::query()->update(['status' => Self::status_soft_delete]);

        // Redirect về trang trước đó hoặc trang chủ
        // return back()->with('success', 'Đã xóa mềm tất cả các thông báo.');
        return redirect()->route('admin.pages-notification')->with('showAlert', [
            'success' => 'Thông báo đã được xóa'
        ]);
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
    public function tables_advanced()
    {

        return view('admincp.tables-advanced');
    }
}
