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
        //
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
        return view('admincp.pages-login');
    }
    public function pages_register()
    {
        return view('admincp.pages-register');
    }
    public function check_login()
    {
        // Bắt lỗi
        request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ], [
            'email.exists' => 'Email không tồn tại trong hệ thống.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
        ]);

        $credentials = request()->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Authentication passed
            return redirect()->route('trang-quan-ly');
        }

        // Authentication failed
        return redirect()->back()->withErrors([
            'password' => 'Mật khẩu không chính xác.',
        ]);
    }
    
    public function check_register()
    {
        // Bắt lỗi
        request()->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ], [
            'username.required' => 'Vui lòng nhập tên người dùng.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Địa chỉ email đã tồn tại trong hệ thống.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password_confirmation.required' => 'Vui lòng nhập lại mật khẩu để xác nhận.',
            'password_confirmation.same' => 'Mật khẩu xác nhận không khớp với mật khẩu đã nhập.',
        ]);
        $data = request()->all('username', 'email');
        $data['password'] = bcrypt(request('password'));
        User::create($data);
        return redirect()->route('pages-login-admin');
    }
    public function admin(){
        return redirect()->route('trang-quan-ly');
    }
}
