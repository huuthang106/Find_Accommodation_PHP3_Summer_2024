<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Str;

class ReportAdminController extends Controller
{
    //
    // Biến xóa mềm = 5
    const status_soft_delete = 5;
    // Biến Đã Xem = 0
    const status_da_xem = 0;
    // Biến Chưa Xem = 1;
    public function index()
    {
        // Lấy tất cả báo cáo từ cơ sở dữ liệu loại trừ các báo cáo có status = 5
        $reports = Report::where('status', '!=', Self::status_soft_delete)->orderByDesc('id')->get();
        // Duyệt qua mỗi report để giới hạn ký tự của title
        foreach ($reports as $item) {
            $item->room_title = Str::limit($item->room->title, 10);
            $item->message = Str::limit($item->message, 10);
        }
        return view('admincp.manages.pages-report', compact('reports'));
    }
    public function showReport(string $id)
    {
        $reports = Report::where('id', $id)->get();


        // Hiển thị giao diện Chi tiết thông báo admin
        return view('admincp.details.pages-report-detail', compact('reports'));
    }
    public function destroyReport(string $id)
    {
        $reports = Report::find($id);
        if ($reports) {
            $reports->status = Self::status_soft_delete; // Đánh dấu thông báo là đã xóa
            $reports->save();
            return redirect()->route('admin.pages-report')->with('showAlert', [
                'success' => 'Thông báo đã được xóa'
            ]);
        }
        return redirect()->back()->with(['error' => 'Không tìm thấy thông báo.', 'showAlert' => true]);
    }
    public function viewAndChangeStatus($id)
    {
        // Tìm báo cáo theo id
        $reports = Report::findOrFail($id);
        // if (!$reports) {
        //     return redirect()->route('admin.notifications.index')->with('showAlert', [
        //         'not_found' => 'Thông báo không tồn tại.'
        //     ]);
        // }
        // Cập nhật trạng thái thông báo (ví dụ: đánh dấu là đã đọc)
        $reports->status = Self::status_da_xem;; // hoặc trạng thái khác phù hợp với ứng dụng của bạn
        $reports->save();

        // Hiển thị trang chi tiết thông báo
        return view('admincp.details.pages-report-detail', compact('reports'), ['id' => $id]);
    }
}
