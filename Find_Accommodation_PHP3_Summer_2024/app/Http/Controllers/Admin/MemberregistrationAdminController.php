<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Memberregistration;
use App\Models\User;
use App\Models\Imagesmember;



class MemberregistrationAdminController extends Controller
{
    //
    public function index()
    {
        $list = Memberregistration::where('status', '1')->get();
        $index = 1;
        return view('admincp.manages.approve-application', compact('list', 'index'));
    }
    public function show($id)
    {
        $item = Memberregistration::find($id);
        $images = $item->imgmember;

        return view('admincp.details.page-memberresigter', compact('item', 'images'));
    }
    public function delete($id)
    {
        $updated = Memberregistration::where('id', $id)->update(['status' => 5]);
        if ($updated) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
    public function trash()
    {
        $list = Memberregistration::where('status', '5')->get();
        return view('admincp.manages.pages-trash-registration-form', compact('list'));
    }
    public function restore($id)
    {
        $updated = Memberregistration::where('id', $id)->update(['status' => 1]);
        if ($updated) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
    public function   agree($id)
    {
        $item = Memberregistration::find($id);
        $user_id = $item->user_id;
        $images = Imagesmember::where('memberregistration_id', $id)->get(['filename']);
        // dd($images);

        foreach ($images as $image) {
            $filePath = public_path('assets/images/imagesmembers/' . $image->filename);

            // Kiểm tra xem tệp có tồn tại trước khi xóa
            if (file_exists($filePath)) {
                unlink($filePath); // Xóa tệp
            }
        }
        // dd('thanh cong');
        $deletedimg = Imagesmember::where('memberregistration_id', $id)->delete();
        $deleted = Memberregistration::where('id', $id)->delete();

        if ($deleted) {
            $update = User::where('id', $user_id)->update(['role' => 3]);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
    public function remove($id)
    {
        // Tìm đối tượng Memberregistration
        $item = Memberregistration::find($id);
        // if (!$item) {
        //     return response()->json(['success' => false, 'message' => 'Memberregistration not found']);
        // }

        // Lấy tất cả các tên tệp cần xóa từ Imagesmember
        $images = Imagesmember::where('memberregistration_id', $id)->get(['filename']);

        // Xóa các tệp từ thư mục
        foreach ($images as $image) {
            $filePath = public_path('assets/images/imagesmembers/' . $image->filename);

            // Kiểm tra xem tệp có tồn tại trước khi xóa
            if (file_exists($filePath)) {
                unlink($filePath); // Xóa tệp
            }
        }

        // Xóa các bản ghi trong Imagesmember
        $deletedimg = Imagesmember::where('memberregistration_id', $id)->delete();

        // Xóa bản ghi trong Memberregistration
        $deleted = Memberregistration::where('id', $id)->delete();

        // Nếu đã xóa thành công
        if ($deleted) {
            return response()->json(['success' => true]);
        }

        // Trả về thông báo thất bại nếu không xóa được
        return response()->json(['success' => false]);
    }
}
