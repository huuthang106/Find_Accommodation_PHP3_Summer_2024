<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;


class IndexAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        // Truyền dữ liệu tới view
        return view('admincp.manages.pages-notification');
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

    public function pages_login()
    {
        return view('admincp.accounts.pages-login');
    }
    public function pages_register()
    {
        return view('admincp.accounts.pages-user-role');
    }
    public function check_login()
    {
        // Bắt lỗi
        request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ], [
            'email.exists' => 'Tài khoảng hoặc mật khẩu không đúng',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
        ]);

        $credentials = request()->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Authentication passed
            $user = auth()->user();
            switch ($user->role) {
                case 0:
                    // Trường hợp người dùng có status = 2, cho phép truy cập
                    return redirect()->route('admin.trang-quan-ly');
                default:
                    // Các trường hợp khác, đăng xuất và thông báo lỗi
                    auth()->logout();
                    return redirect()->back()->withErrors([
                        'password' => 'Tài khoảng hoặc mật khẩu không đúng',
                    ]);
            }
        } else {
            // Đăng nhập không thành công
            return redirect()->back()->withErrors([
                'password' => 'Tài khoản hoặc mật khẩu không đúng',
            ]);
        }
    }

    // Authentication failed



    public function check_register()
    {
        // Validate the input fields
        request()->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'role' => 'required',
        ], [
            'username.required' => 'Vui lòng nhập tên người dùng.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Địa chỉ email đã tồn tại trong hệ thống.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password_confirmation.required' => 'Vui lòng nhập lại mật khẩu để xác nhận.',
            'password_confirmation.same' => 'Mật khẩu xác nhận không khớp với mật khẩu đã nhập.',
            'role.required' => 'Vui lòng chọn vai trò người dùng.',
        ]);

        // Retrieve input data
        $data = request()->only('username', 'email', 'role');
        $data['password'] = bcrypt(request('password'));

        // Create a new user
        User::create($data);

        // Redirect to the login page
        return redirect()->route('admin.manages-user');
    }

    public function admin()
    {
        return redirect()->route('admin.pages-login-admin');
    }
}
