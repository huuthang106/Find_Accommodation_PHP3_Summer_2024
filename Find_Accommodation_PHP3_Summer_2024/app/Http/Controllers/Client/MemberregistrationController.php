<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Memberregistration;
use App\Http\Controllers\Client\ImagesmembersController;
use Illuminate\Support\Facades\Http;

class MemberregistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('page.users.resigter-member');
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
    // public function store(Request $request)
    // {
    //     //
    //     if (!auth()->check()) {
    //         return redirect()->route('login')->with('error', 'Bạn phải đăng nhập đăng ký.');
    //     }
    //     $user_id = auth()->id();
    //     request()->merge(['user_id' => $user_id]);
    //     $request->validate([
    //         'fullname' => 'required',
    //         'description' => 'required',
    //         'idenerregistra_number' => 'required|numeric',
    //         'phone' => 'required|regex:/^[0-9]{9,13}$/',
    //         'gender' => 'required',
    //         'images' => 'required', // Trường images là bắt buộc
    //         'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Quy tắc này sẽ kiểm tra từng hình ảnh nếu có
    //     ], [
    //         'fullname.required' => 'Vui lòng nhập họ tên.',
    //         'description.required' => 'Vui lòng nhập mô tả.',
    //         'idenerregistra_number.required' => 'Vui lòng nhập số đăng ký định danh.',
    //         'idenerregistra_number.numeric' => 'Số đăng ký định danh phải là số.',
    //         'phone.required' => 'Vui lòng nhập số điện thoại.',
    //         'phone.regex' => 'Số điện thoại phải có từ 9 đến 13 chữ số.',
    //         'gender.required' => 'Vui lòng chọn giới tính.',
    //         'images.required' => 'Vui lòng tải lên ít nhất một hình ảnh.',
    //         'images.*.image' => 'Tất cả các tệp phải là hình ảnh.',
    //         'images.*.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, hoặc gif.',
    //         'images.*.max' => 'Kích thước hình ảnh không được vượt quá 2048 kilobytes (2MB).',
    //     ]);
    //     $data = $request->only('fullname', 'description', 'idenerregistra_number', 'phone', 'gender', 'user_id');
    //     $memberregistration = Memberregistration::create($data);
    //     // Kiểm tra xem có hình ảnh nào không
    //     if ($request->hasFile('images') && count($request->file('images')) > 0) {
    //         // Lưu hình ảnh
    //         $ImagesmembersController = new ImagesmembersController();
    //         $ImagesmembersController->store($request, $memberregistration->id);
    //         $notificationController = new NotificationController;
    //         $notificationController->notifiMemberregistration($user_id, $memberregistration->id);
    //         return redirect()->route('profileus')->with('success', 'Đăng ký thành công.');
    //     }
    // }
    public function store(Request $request)
    {

        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập đăng ký.');
        }
        $user_id = auth()->id();
        request()->merge(['user_id' => $user_id]);
        $request->validate([
            'fullname' => 'required',
            'description' => 'required',
            'idenerregistra_number' => 'required|numeric',
            'phone' => 'required|regex:/^[0-9]{9,13}$/',
            'gender' => 'required',
            'images' => 'required|array|size:2',
            'images.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'fullname.required' => 'Vui lòng nhập họ tên.',
            'description.required' => 'Vui lòng nhập mô tả.',
            'idenerregistra_number.required' => 'Vui lòng nhập số đăng ký định danh.',
            'idenerregistra_number.numeric' => 'Số đăng ký định danh phải là số.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.regex' => 'Số điện thoại phải có từ 9 đến 13 chữ số.',
            'gender.required' => 'Vui lòng chọn giới tính.',
            'images.required' => 'Vui lòng tải lên ít nhất một hình ảnh.',
            'images.*.image' => 'Tất cả các tệp phải là hình ảnh.',
            'images.*.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, hoặc gif.',
            'images.*.max' => 'Kích thước hình ảnh không được vượt quá 2048 kilobytes (2MB).',
        ]);

        $data = $request->only('fullname', 'description', 'idenerregistra_number', 'phone', 'gender', 'user_id');

        $memberregistration = Memberregistration::create($data);

        try {
            if ($request->hasFile('images')) {
                $files = $request->file('images');

                if (count($files) !== 2) {
                    return redirect()->back()->with('error', 'Vui lòng tải lên đúng 2 hình ảnh.');
                }

                $response = Http::withOptions([
                    'verify' => false, // Bỏ qua xác thực SSL
                ])->withHeaders([
                    'api_key' => 'IJYRzZuKSxsklVxSezA7X0msF2tsLdE6'
                ])->attach('file[]', fopen($files[0]->getRealPath(), 'r'), $files[0]->getClientOriginalName())
                    ->attach('file[]', fopen($files[1]->getRealPath(), 'r'), $files[1]->getClientOriginalName())
                    ->post('https://api.fpt.ai/dmp/checkface/v1');

                $responseData = $response->json();
                // dd($responseData);
                if ($responseData['data']['isMatch'] === true) {
                    // Lưu hình ảnh
                    $ImagesmembersController = new ImagesmembersController();
                    $ImagesmembersController->store($request, $memberregistration->id);
                    $notificationController = new NotificationController;
                    $notificationController->notifiMemberregistration($user_id, $memberregistration->id);
                    return redirect()->route('profileus')->with('success', 'Đăng ký thành công.');
                } else {
                    return redirect()->back()->with('success', 'Dữ liệu đã được gửi thành công!')->with('response', $responseData);
                }
            } else {
                return redirect()->back()->with('error', 'Không có hình ảnh nào được tải lên.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
        }
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
