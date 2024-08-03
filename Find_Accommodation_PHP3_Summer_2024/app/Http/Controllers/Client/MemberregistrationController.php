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
        // Nguyễn Hữu Thắng
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập đăng ký.');
        }
        $user_id = auth()->id();
        request()->merge(['user_id' => $user_id]);
        $request->validate([

            'images' => 'required', // Trường images là bắt buộc
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Quy tắc này sẽ kiểm tra từng hình ảnh nếu có
        ], [

            'images.required' => 'Vui lòng tải lên ít nhất một hình ảnh.',
            'images.*.image' => 'Tất cả các tệp phải là hình ảnh.',
            'images.*.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, hoặc gif.',
            'images.*.max' => 'Kích thước hình ảnh không được vượt quá 2048 kilobytes (2MB).',
        ]);
        $files = $request->file('images');
        $filePaths = [];
        foreach ($files as $file) {
            $path = $file->store('temp'); // Lưu tạm thời tệp vào thư mục 'temp'
            $filePaths[] = $path;
        }
        // gọi hàm gửi hình ảnh cccd
        $Front_ID_recognition = $this->sendToOCRService($files[0]);
        $Rear_ID_recognition = $this->sendToOCRService($files[1]);
        // dd($Front_ID_recognition);
        if ($Front_ID_recognition['errorCode'] === 0 && $Rear_ID_recognition['errorCode'] === 0) {
            // dd($Front_ID_recognition['data'][0]['id'], $Rear_ID_recognition);
            if (
                isset($Front_ID_recognition['data'][0]['id']) && !empty($Front_ID_recognition['data'][0]['id'])
                && isset($Rear_ID_recognition['data'][0]['issue_date']) && !empty($Rear_ID_recognition['data'][0]['issue_date'])
            ) {
                // Cả hai khóa 'id' và 'issue_date' đều tồn tại và không rỗng
                // dd( $Front_ID_recognition , $Rear_ID_recognition);

                try {
                    if ($request->hasFile('images')) {
                        $files = $request->file('images');
                        // bắ lỗi gửi đủ ảnh
                        if (count($files) !== 3) {
                            return redirect()->back()->with('error', 'Vui lòng tải lên đúng 2 hình ảnh.');
                        } else {
                            // Võ Tấn Luôn

                            $response = Http::withOptions([
                                'verify' => false, // Bỏ qua xác thực SSL
                            ])->withHeaders([
                                'api_key' => 'KqNocx5pH0H7oNq9HVq0JatzmwqfkpwY'
                            ])->attach('file[]', fopen(storage_path('app/' . $filePaths[0]), 'r'), $files[0]->getClientOriginalName())
                                ->attach('file[]', fopen(storage_path('app/' . $filePaths[2]), 'r'), $files[2]->getClientOriginalName())
                                ->post('https://api.fpt.ai/dmp/checkface/v1');
                            // sau khu truy vấn xong bắt đầu trả dữ liệu

                            $responseData = $response->json();
                            // dd($responseData);
                            if ($responseData['data']['isMatch'] === true) {

                                // chuyển đến trang xác nhận lại thông tin , Nguyễn Hữu Thắng
                                return redirect()->route('page_confirm')
                                    ->with('success', 'Xác nhận thông tin.')
                                    ->with('Front_ID_recognition', $Front_ID_recognition)
                                    ->with('Rear_ID_recognition', $Rear_ID_recognition)
                                    ->with('file_paths', $filePaths)
                                    ->with('description', $request->input('description'))
                                    ->with('phone', $request->input('phone'));
                            } else {
                                // dd($responseData);

                                return redirect()->back()->with('success', 'Dữ liệu đã được gửi thành công!')->with('response', $responseData);
                            }
                        }
                    } else {
                        return redirect()->back()->with('error', 'Không có hình ảnh nào được tải lên.');
                    }
                } catch (\Exception $e) {
                    return redirect()->back()->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
                }
            } else {
                // Một trong các khóa không tồn tại hoặc rỗng
                dd('Lỗi: Không đủ dữ liệu cả 2 mặt. Vui lòng kiểm tra lại ảnh.');
            }
        } else if ($Front_ID_recognition['errorCode'] === 1 || $Rear_ID_recognition['errorCode'] === 1) {
            dd('Sai thông số trong request (ví dụ không có key hoặc ảnh trong request body)');
        } else if ($Front_ID_recognition['errorCode'] === 2 || $Rear_ID_recognition['errorCode'] === 2) {
            dd('CMT trong ảnh bị thiếu góc nên không thể crop về dạng chuẩn');
        } else if ($Front_ID_recognition['errorCode'] === 3 || $Rear_ID_recognition['errorCode'] === 3) {
            dd('Hệ thống không tìm thấy CMT trong ảnh hoặc ảnh có chất lượng kém (quá mờ, quá tối/sáng).');
        } else if ($Front_ID_recognition['errorCode'] === 5 || $Rear_ID_recognition['errorCode'] === 5) {
            dd('Request sử dụng key image_url nhưng giá trị bỏ trống.');
        } else if ($Front_ID_recognition['errorCode'] === 6 || $Rear_ID_recognition['errorCode'] === 6) {
            dd('Request sử dụng key image_url nhưng hệ thống không thể mở được URL này.');
        } else if ($Front_ID_recognition['errorCode'] === 7 || $Rear_ID_recognition['errorCode'] === 7) {
            dd('File gửi lên không phải là file ảnh.');
        } else if ($Front_ID_recognition['errorCode'] === 8 || $Rear_ID_recognition['errorCode'] === 8) {
            dd('File ảnh gửi lên bị hỏng hoặc format không được hỗ trợ.');
        } else if ($Front_ID_recognition['errorCode'] === 9 || $Rear_ID_recognition['errorCode'] === 9) {
            dd('Request sử dụng key image_base64 nhưng giá trị bỏ trống.');
        } else if ($Front_ID_recognition['errorCode'] === 10 || $Rear_ID_recognition['errorCode'] === 10) {
            dd('Request sử dụng key image_base64 nhưng string cung cấp không hợp lệ..');
        } else {
            dd('ko chạy đung dieu kien ');
        }
    }

    public function sendToOCRService($image)
    {
        $fileName = $image->getPathname();
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $fileName);
        finfo_close($finfo);

        $cFile = curl_file_create($fileName, $mimeType, $image->getClientOriginalName());
        $data = array("image" => $cFile, "filename" => $cFile->postname);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.fpt.ai/vision/idr/vnm",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "api-key: IJYRzZuKSxsklVxSezA7X0msF2tsLdE6"
            ),
            CURLOPT_RETURNTRANSFER => true, // Trả về kết quả dưới dạng chuỗi thay vì in ra
            CURLOPT_SSL_VERIFYPEER => false, // Tắt xác thực SSL

        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return ['error' => "cURL Error #:" . $err];
        } else {

            return json_decode($response, true);
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
    public function page_confirm()
    {
        $frontIDRecognition = session('Front_ID_recognition');
        $rearIDRecognition = session('Rear_ID_recossgnition');
        $filePaths = session('file_paths');
        $description = session('description');
        $phone = session('phone');

        return view('page.users.confirm-information', compact('frontIDRecognition', 'rearIDRecognition', 'filePaths', 'description', 'phone'));
    }
    public function confirm(Request $request)
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

        ], [
            'fullname.required' => 'Vui lòng nhập họ tên.',
            'description.required' => 'Vui lòng nhập mô tả.',
            'idenerregistra_number.required' => 'Vui lòng nhập số đăng ký định danh.',
            'idenerregistra_number.numeric' => 'Số đăng ký định danh phải là số.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.regex' => 'Số điện thoại phải có từ 9 đến 13 chữ số.',
            'gender.required' => 'Vui lòng chọn giới tính.',

        ]);

        $data = $request->only('fullname', 'description', 'idenerregistra_number', 'phone', 'gender', 'user_id');
        $memberregistration = Memberregistration::create($data);
        // Kiểm tra xem có hình ảnh nào không
        $filePaths = session('file_paths', []);
        session()->forget('file_paths');
        // dd($filePaths);
        if (!empty($filePaths)) {
            // Tạo request giả để truyền đường dẫn hình ảnh vào hàm store
            $tempRequest = new Request();
            $tempRequest->merge(['images' => $filePaths]);

            // Tạo instance của controller hình ảnh và gọi hàm lưu
            $ImagesmembersController = new ImagesmembersController();
            $ImagesmembersController->store($tempRequest, $memberregistration->id);

            $notificationController = new NotificationController;
            $notificationController->notifiMemberregistration($user_id, $memberregistration->id);

            return redirect()->route('profileus')->with('success', 'Đăng ký thành công.');
        }
    }
}
