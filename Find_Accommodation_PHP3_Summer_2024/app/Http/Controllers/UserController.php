<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\ForgotPassword;
use App\Mail\ForgotPasswordUs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\ResetPasswordToken;

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
        return view('admincp.accounts.extras-profile', compact('admin'));

      

     
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
    public function forget_password()
    {
        // Hiển thị giao diện quên mật khẩu trong Folder admincp
        return view('admincp.pages-forget-password');
    }
    public function check_forget_password(Request $request)
    {
        // Hàm để vận hành đổi mật khẩu và tạo token
        // Bắt lổi mail
        $request->validate([
            'email' => 'required | exists:users'
        ], [
            'email.required' => 'Vui lòng nhập thông tin Email',
            'email.email' => 'Định dạng Email không hợp lệ',
            'email.exists' => 'Email không tồn tại trong hệ thống'
        ]);
        // Truy vấn
        $admin = User::where('email', $request->email)->first();
        // dd($admin);
        $token = Str::random(40);
        $tokenData = [
            'email' => $admin->email,
            'token' => $token
        ];
        // dd($tokenData);
        // Tạo hoặc cập nhật token trong bảng password_reset_tokens
        ResetPasswordToken::updateOrCreate(
            ['email' => $request->email], // Điều kiện tìm kiếm
            ['token' => $token, 'updated_at' => now()] // Cập nhật hoặc tạo mới
        );
        // Gửi email
        try {
            Mail::to($request->email)->send(new ForgotPassword($admin, $token));
            return redirect()->back()->with('success', 'Đã gửi email khôi phục mật khẩu. Vui lòng kiểm tra hộp thư của bạn.')->with('showAlert', true);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gửi email không thành công: ' . $e->getMessage())->with('showAlert', true);
        }
    }
    public function reset_password($token)
    {
        $tokenData = ResetPasswordToken::CheckToken($token);
        // $admin = User::where('email', $tokenData->email)->firstOrFail();
        return view('admincp.pages-reset-password', compact('tokenData', 'token'));
    }
    public function check_reset_password(Request $request, $token)
    {
        // Xác thực dữ liệu yêu cầu
        $request->validate(
            [
                'password' => 'required|confirmed',
            ],
            [
                'password.required' => 'Vui lòng nhập mật khẩu',
                'password.confirmed' => 'Mật khẩu không trùng khớp'
            ]
        );

        // Kiểm tra và lấy dữ liệu token
        $tokenData = ResetPasswordToken::where('token', $token)->first();
        if (!$tokenData) {
            return redirect()->route('pages-forget-password')->with('error', 'Token không hợp lệ');
        }

        // Lấy người dùng tương ứng với token
        $admin = User::where('email', $tokenData->email)->first();
        if (!$admin) {
            return redirect()->route('pages-forget-password')->with('error', 'Tài khoản không tồn tại')->with('showAlert', true);
        }

        // Cập nhật mật khẩu
        $admin->password = bcrypt($request->input('password'));
        $admin->save();

        // Xóa token sau khi cập nhật thành công
        $tokenData->delete();

        return redirect()->route('admincp.pages-login')->with('success', 'Mật khẩu đã được cập nhật thành công')->with('showAlert', true);
    }
    public function check_forget_password_us(Request $request)
    {
        // Hàm để vận hành đổi mật khẩu và tạo token
        // Bắt lổi mail
        $request->validate([
            'email' => 'required | exists:users'
        ], [
            'email.required' => 'Vui lòng nhập thông tin Email',
            'email.email' => 'Định dạng Email không hợp lệ',
            'email.exists' => 'Email không tồn tại trong hệ thống'
        ]);
        // Truy vấn
        $admin = User::where('email', $request->email)->first();
        // dd($admin);
        $token = Str::random(40);
        $tokenData = [
            'email' => $admin->email,
            'token' => $token
        ];
        // dd($tokenData);
        // Tạo hoặc cập nhật token trong bảng password_reset_tokens
        ResetPasswordToken::updateOrCreate(
            ['email' => $request->email], // Điều kiện tìm kiếm
            ['token' => $token, 'updated_at' => now()] // Cập nhật hoặc tạo mới
        );
        // Gửi email
        try {
            Mail::to($request->email)->send(new ForgotPasswordUs($admin, $token));
            return redirect()->back()->with('success', 'Đã gửi email khôi phục mật khẩu. Vui lòng kiểm tra hộp thư của bạn.')->with('showAlert', true);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gửi không thành công: ' . $e->getMessage())->with('showAlert', true);
        }
    }
    public function reset_password_us($token)
    {
        $tokenData = ResetPasswordToken::CheckToken($token);
        // $admin = User::where('email', $tokenData->email)->firstOrFail();
        return view('page.reset-password', compact('tokenData', 'token'));
    }
    public function check_reset_password_us(Request $request, $token)
    {
        // Xác thực dữ liệu yêu cầu
        $request->validate(
            [
                'password' => 'required|confirmed',
            ],
            [
                'password.required' => 'Vui lòng nhập mật khẩu',
                'password.confirmed' => 'Mật khẩu không trùng khớp'
            ]
        );

        // Kiểm tra và lấy dữ liệu token
        $tokenData = ResetPasswordToken::where('token', $token)->first();
        if (!$tokenData) {
            return redirect()->route('home')->with('error', 'Token không hợp lệ')->with('showAlert', true);
        }

        // Lấy người dùng tương ứng với token
        $users = User::where('email', $tokenData->email)->first();
        if (!$users) {
            return redirect()->route('home')->with('error', 'Tài khoản không tồn tại')->with('showAlert', true);
        }

        // Cập nhật mật khẩu
        $users->password = bcrypt($request->input('password'));
        $users->save();

        // Xóa token sau khi cập nhật thành công
        $tokenData->delete();

        return redirect()->route('home')->with('success', 'Mật khẩu đã được cập nhật thành công')->with('showAlert', true);
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
