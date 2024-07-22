<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class RoleAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
    }
    public function ShowRole()
    {
        // Lấy tất cả người dùng có role khác 5
        $role = User::where('role', '!=', 5)->get();
    
        // Trả về view với dữ liệu người dùng
        return view('admincp.manages.extras-role', compact('role'));
    }
    
    public function deleteRole($id)
    {
        // Tìm bản ghi theo ID
        $user = User::findOrFail($id);
    
        // Lấy ID của người dùng hiện tại (người dùng đang đăng nhập)
        $currentUserId = auth()->id();
        
        // Kiểm tra nếu người dùng muốn xóa tài khoản của chính mình
        if ($user->id === $currentUserId) {
            return redirect()->route('show-role')->with('error', 'Bạn không thể xóa chính mình.');
        }
    
        // Kiểm tra role của người dùng hiện tại
        $currentUserRole = User::findOrFail($currentUserId)->role;
    
        if ($currentUserRole !== 0) {
            return redirect()->route('show-role')->with('error', 'Chỉ người dùng có role 0 mới có thể xóa người khác.');
        }
    
        // Cập nhật trạng thái thành 5 (ẩn) nếu người dùng có role khác 0 và không phải chính mình
        $user->role = 5;
        $user->save();
    
        // Quay lại trang quản lý role với thông báo thành công
        return redirect()->route('show-role')->with('success', 'Người dùng đã được ẩn.');
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
