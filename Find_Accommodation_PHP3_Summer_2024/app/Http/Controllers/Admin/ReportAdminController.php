<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Str;

class ReportAdminController extends Controller
{
    //
    public function index()
    {
        // Lấy tất cả báo cáo từ cơ sở dữ liệu loại trừ các báo cáo có status = 5
        $reports = Report::where('status', '!=', 5)->get();
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
            $reports->status = 5; // Đánh dấu thông báo là đã xóa
            $reports->save();
            return redirect()->back()->with(['success' => 'Thông báo đã được xóa thành công.', 'showAlert' => true]);
        }
        return redirect()->back()->with(['error' => 'Không tìm thấy thông báo.', 'showAlert' => true]);
    }
    public function updateReport(Request $request, string $id)
    {
        // Lấy thông báo dựa trên ID
        $reports = Report::find($id);

        // Kiểm tra xem thông báo có tồn tại không
        if ($reports) {
            // Cập nhật trạng thái báo cáo
            $reports->status = 0;
            $reports->save();

            return redirect()->route('pages-report')->with(['success' => 'Thông báo đã được cập nhật.', 'showAlert' => true, 'reportId' => $id]);
        }

        return redirect()->route('pages-report')->with(['error' => 'Thông báo không tồn tại.', 'showAlert' => false]);
    }
}
