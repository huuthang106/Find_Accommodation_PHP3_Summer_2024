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
use App\Models\ResetPasswordToken;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

use App\Models\Room;
use Illuminate\Support\Str;

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

        return redirect()->route('pages-login-admin')->with('success', 'Mật khẩu đã được cập nhật thành công')->with('showAlert', true);
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
        $rooms = Room::where('user_id', $user->id)->where('status', '!=', 7)->get();
        $rooms = $rooms->map(function ($room) {
            $room->title = Str::limit($room->title, 15);
            $room->address = Str::limit($room->address, 20);
            $room->description = Str::limit($room->description, 10); // Giới hạn độ dài của description
            $room->user->username = Str::limit($room->user->username, 10);
            $room->category->name = Str::limit($room->category->name, 10);
            return $room;
        });
        return view('page.users.profile-us', compact('user', 'rooms'));
    }
    public function show_update_password()
    {
        return view('page.users.reset-password-us');
    }
    public function check_update_password(Request $request)
    {
        // Bắt lỗi
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|string|confirmed',
        ], [
            'old_password.required' => 'Vui lòng nhập mật khẩu cũ',
            'password.required' => 'Vui lòng nhập mật khẩu mới',
            'password.confirmed' => 'Mật khẩu nhập lại không khớp',
        ]);

        // Nhận người dùng được xác thực hiện tại
        $user = Auth::user();

        // Đảm bảo $user là một instance của model User
        // Kiểm tra xem người dùng đã xác thực có phải là một instance hợp lệ của model User hay không
        if (!$user instanceof User) {
            return back()->withErrors(['user' => 'Người dùng không hợp lệ']);
        }

        // Kiểm tra xem mật khẩu cũ có khớp không
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Mật khẩu cũ không chính xác']);
        }

        // Cập nhật mật khẩu người dùng
        $user->password = Hash::make($request->password);
        $user->save();

        // Trả về phẩn hồi khi thành công
        return back()->with([
            'showAlert' => true,
            'success' => 'Mật khẩu đã được thay đổi thành công'
        ]);
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
        // Tìm thông tin khách hàng theo id
        $user = User::find($id);

        // Xem người dùng có tồn tại
        if (!$user) {
            return redirect()->route('profileus')->with('error', 'Tài khoản không tồn tại');
        }

        // Bắt lỗi dữ liệu
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'about_me' => 'nullable|string',
        ], [
            'username.required' => 'Vui lòng nhập tên người dùng.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Địa chỉ email đã tồn tại trong hệ thống.',
            'avatar.image' => 'File phải là hình ảnh.',
            'avatar.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif.',
            'avatar.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
        ]);

        // Xử lý upload avatar
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');

            // Tạo tên file mới
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Đặt đường dẫn thư mục lưu trữ
            $destinationPath = public_path('assets/images/users');

            // Di chuyển tệp tải lên
            $file->move($destinationPath, $fileName);

            // Lưu đường dẫn tương đối của ảnh vào dữ liệu đã xác thực
            $validatedData['avatar'] = $fileName;
        }

        // Cập nhật thông tin người dùng
        $user->update($validatedData);

        // Chuyển hướng sau khi cập nhật thành công
        return redirect()->route('profileus', ['id' => $user->id])->with('success', 'Thông tin đã được cập nhật');
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
    // Lay thong tin user theo id 
    public function showHome(string $id)
    {
        $users = User::find($id);
        $rooms = Room::where('user_id', $users->id)->where('status', '!=', 7)->get();
        $rooms = $rooms->map(function ($room) {
            $room->title = Str::limit($room->title, 15);
            $room->address = Str::limit($room->address, 20);
            $room->description = Str::limit($room->description, 10); // Giới hạn độ dài của description
            $room->user->username = Str::limit($room->user->username, 10);
            $room->category->name = Str::limit($room->category->name, 10);
            return $room;
        });
        return view('page.users.proflie-us-other', compact('users', 'rooms'));
    }

    public function showAdmin()
    {
        $users = User::whereIn('role', [1, 2])->get();
        return view('admincp.manages.pages-user', compact('users'));
    }
}
