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
        // Validate the form data
        // $request->validate([
        //     'fullname' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'idenerregistra_number' => 'required|string|max:255',
        //     'phone' => 'required|string|min:6|max:15',
        //     'gender' => 'required|integer',
        //     'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        // ]);
        // // dd($request);


        // try {
        //     if ($request->hasFile('images')) {
        //         $file = $request->file('images')[0]; // Assuming you want to upload the first image
        //         // dd($file);
        //         $fileName = $file->getPathname();
        //         $finfo = finfo_open(FILEINFO_MIME_TYPE);
        //         $mimeType = finfo_file($finfo, $fileName);
        //         finfo_close($finfo);

        //         $cFile = curl_file_create($fileName, $mimeType, $file->getClientOriginalName());
        //         $data = array("image" => $cFile, "filename" => $cFile->postname);

        //         $curl = curl_init();
        //         curl_setopt_array($curl, array(
        //             CURLOPT_URL => "https://api.fpt.ai/vision/idr/vnm",
        //             CURLOPT_CUSTOMREQUEST => "POST",
        //             CURLOPT_POSTFIELDS => $data,
        //             CURLOPT_HTTPHEADER => array(
        //                 "api-key: KqNocx5pH0H7oNq9HVq0JatzmwqfkpwY"
        //             ),
        //             CURLOPT_RETURNTRANSFER => true,
        //             CURLOPT_SSL_VERIFYPEER => false,
        //             CURLOPT_SSL_VERIFYHOST => false,
        //         ));

        //         $response = curl_exec($curl);
        //         $err = curl_error($curl);

        //         curl_close($curl);

        //         if ($err) {
        //             dd($err);
        //             return redirect()->back()->with('error', "cURL Error #:" . $err);
        //         } else {
        //             $responseData = json_decode($response, true);

        //             if ($responseData['errorCode'] == 0 && isset($responseData['data'][0])) {
        //                 $ocrData = $responseData['data'][0];

        //                 // Lưu dữ liệu vào cơ sở dữ liệu (nếu cần)
        //                 // Ví dụ:
        //                 // User::create([
        //                 //     'fullname' => $ocrData['name'],
        //                 //     'id_number' => $ocrData['id'],
        //                 //     'dob' => $ocrData['dob'],
        //                 //     // Các trường khác...
        //                 // ]);
        //                 dd($ocrData);
        //                 return redirect()->route('home')->with('success', 'Dữ liệu đã được gửi thành công!');
        //             } else {
        //                 dd('Ko đúng');
        //                 return redirect()->back()->with('error', 'Đã xảy ra lỗi khi gửi dữ liệu.');
        //             }
        //         }
        //     } else {
        //         return redirect()->back()->with('error', 'Không có hình ảnh nào được tải lên.');
        //     }
        // } catch (\Exception $e) {
        //     return redirect()->back()->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
        // }

        // Xác thực đầu vào
        // $request->validate([
        //     'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        // ]);

        // try {
        //     // Kiểm tra xem có file nào được tải lên không
        //     if ($request->hasFile('images')) {
        //         // Lấy tất cả các file
        //         $files = $request->file('images');

        //         // Tạo mảng để chứa các đối tượng cURL file
        //         $cFiles = [];
        //         foreach ($files as $index => $file) {
        //             $cFiles["file[$index]"] = new \CURLFile($file->getRealPath(), $file->getMimeType(), $file->getClientOriginalName());
        //         }

        //         // Khởi tạo cURL
        //         $curl = curl_init();
        //         curl_setopt_array($curl, [
        //             CURLOPT_URL => "https://api.fpt.ai/dmp/checkface/v1",
        //             CURLOPT_RETURNTRANSFER => true,
        //             CURLOPT_POST => true,
        //             CURLOPT_POSTFIELDS => $cFiles,
        //             CURLOPT_HTTPHEADER => [
        //                 "api_key: KqNocx5pH0H7oNq9HVq0JatzmwqfkpwY"
        //             ],
        //             CURLOPT_SSL_VERIFYPEER => false, // Bỏ qua xác thực SSL
        //             CURLOPT_SSL_VERIFYHOST => false, // Bỏ qua xác thực SSL
        //         ]);

        //         // Thực thi cURL
        //         $response = curl_exec($curl);
        //         $err = curl_error($curl);
        //         curl_close($curl);

        //         // Xử lý phản hồi
        //         if ($err) {
        //             // dd(  $files );
        //             // dd($err);
        //             return redirect()->back()->with('error', "cURL Error #:" . $err);
        //         } else {
        //             $responseData = json_decode($response, true);
        //             // dd($cFiles);
        //             dd($responseData);
        //             return redirect()->back()->with('success', 'Dữ liệu đã được gửi thành công!')->with('response', $responseData);
        //         }
        //     } else {
        //         return redirect()->back()->with('error', 'Không có hình ảnh nào được tải lên.');
        //     }
        // } catch (\Exception $e) {
        //     return redirect()->back()->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
        // }
        $request->validate([
            'images' => 'required|array|size:2',
            'images.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

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
                return redirect()->back()->with('success', 'Dữ liệu đã được gửi thành công!')->with('response', $responseData);
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
