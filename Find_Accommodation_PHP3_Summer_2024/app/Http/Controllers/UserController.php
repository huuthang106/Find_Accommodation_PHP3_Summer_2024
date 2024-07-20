<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Hiển thị thông tin tài khoản Admin
        $admin = Auth::User();
        // dd($admin);
        // Kiểm tra nếu không tìm thấy người dùng
        if (!$admin) {
            return redirect()->route('pages-404')->with('Thông Báo', 'Không tìm thấy người dùng.');
        }
        return view('admincp.extras-profile', compact('admin'));
    }
    public function update_profile_admin(Request $request, string $id)
    {
        // Tìm thông tin Admin theo id
        $admin = User::find($id);

        // Xem Admin có tồn tại
        if (!$admin) {
            return redirect()->route('quan-li-ho-so', ['id' => $admin->id])->with('Lỗi', 'Tài khoản không tồn tại');
        }
        // Bắt lỗi dữ liệu
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password_confirmation' => 'same:password',
        ], [
            'username.required' => 'Vui lòng nhập tên người dùng.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Địa chỉ email đã tồn tại trong hệ thống.',
            'password_confirmation.same' => 'Mật khẩu xác nhận không khớp với mật khẩu đã nhập.',
        ]);
        // Cập nhật thông tin Admin
        $admin->update($request->all());

        // Chuyển hướng sau khi cập nhật thành công
        return redirect()->route('quan-li-ho-so', ['id' => $admin->id])->with('Thành công', 'Thông tin đã được cập nhật');
    }
    public function showHome()
    {
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
    public function show()
    {
        /// Hiển thị thông tin tài khoản người dùng
        $user = Auth::User();
        // dd($users);
        // Kiểm tra nếu không tìm thấy người dùng
        if (!$user) {
            return redirect()->route('pages-404')->with('Thông Báo', 'Không tìm thấy người dùng.');
        }
        return view('page.users.profile-us', compact('user'));
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
    public function profileuser()
    {

        return view('page.users.profile-us');
    }
}
