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
        $user = auth()->user();
        $roleToDelete = user::findOrFail($id);
    
        // Chỉ cho phép admin xóa người khác và không tự xóa chính mình
        if ($user->role == 0 && $user->id != $roleToDelete->id) {
            $roleToDelete->role = 5; // Cập nhật role thành 5
            $roleToDelete->save();
    
            return redirect()->route('admin.quan-li-role')->with('success', 'Người dùng đã được ẩn.');
        }
    
        return redirect()->route('admin.quan-li-role')->with('error', 'Bạn không có quyền xóa người dùng này.');
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
