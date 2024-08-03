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

        // gọi hàm gửi hình ảnh cccd
        $Front_ID_recognition = $this->sendToOCRService($files[0]);
        $Rear_ID_recognition = $this->sendToOCRService($files[1]);
        // dd($Front_ID_recognition);
        // bắt lỗi hết key
        if (isset($Front_ID_recognition['errorCode'])) {
            if ($Front_ID_recognition['errorCode'] === 0 && $Rear_ID_recognition['errorCode'] === 0) {
                // kiểm tra tồn tại của dữ liệu lấy từ AI đọc thông tin căn cước sau đó chạy AI so sánh khuôn mặt
                if (
                    isset($Front_ID_recognition['data'][0]['id']) && !empty($Front_ID_recognition['data'][0]['id'])
                    && isset($Rear_ID_recognition['data'][0]['issue_date']) && !empty($Rear_ID_recognition['data'][0]['issue_date'])
                ) {
                    // Cả hai khóa 'id' và 'issue_date' đều tồn tại và không rỗng
                    // dd( $Front_ID_recognition , $Rear_ID_recognition);

                    try {
                        // Bắt đầu kiểm tra hình ảnh 
                        if ($request->hasFile('images')) {
                            $files = $request->file('images');

                            if (count($files) !== 3) {
                                return redirect()->back()->with('error', 'Vui lòng tải lên đúng 3 hình ảnh.');
                            }
                            // dd($files);
                            // Gửi request đến API của FPT
                            $response = Http::withOptions([
                                'verify' => false, // Bỏ qua xác thực SSL
                            ])->withHeaders([
                                'api_key' => '0pzTY7Ih0ZsP0VVOXshl7Ar7uSQvR0rw'
                            ])->attach('file[]', fopen($files[0]->getRealPath(), 'r'), $files[0]->getClientOriginalName())
                                ->attach('file[]', fopen($files[2]->getRealPath(), 'r'), $files[2]->getClientOriginalName())
                                ->post('https://api.fpt.ai/dmp/checkface/v1');

                            $face_authentication = $response->json();
                            // dd($face_authentication);
                            // Kiểm tra tồn tại để nhận biết hết key
                            if (isset($face_authentication['code'])) {
                                // kiểm tra trạng thái lỗi

                                if ($face_authentication['code'] == 200) {


                                    // dd('asdas');
                                    if ($face_authentication['data']['isMatch'] == true) {

                                        if ($face_authentication['data']['isBothImgIDCard'] == false) {
                                            if ($Front_ID_recognition['errorCode'] === 0 && isset($Front_ID_recognition['data'][0])) {
                                                $responseData = $Front_ID_recognition['data'][0];

                                                // Lấy fullname và gender từ API
                                                $fullname = $responseData['name'];
                                                $gender = ($responseData['sex'] == 'NAM') ? 1 : 2;
                                                $idenerregistra_number = $responseData['id'];
                                                // dd('ádas');
                                                // Gán trực tiếp phone và description
                                                $phone = '0'; // Bạn có thể thay đổi giá trị này
                                                $description = 'Tôi muốn xin làm chủ trọ'; // Bạn có thể thay đổi giá trị này

                                                // Tạo mảng data
                                                $data = [
                                                    'fullname' => $fullname,
                                                    'description' => $description,
                                                    'idenerregistra_number' => $idenerregistra_number,
                                                    'phone' => $phone,
                                                    'gender' => $gender,
                                                    'user_id' => $user_id,
                                                ];

                                                // dd($fullname, $gender, $data['phone'], $data['description']);
                                                // Lấy phone và description từ request


                                                // dd($fullname, $gender, $data['phone'], $data['description']);
                                                // Lấy phone và description từ request
                                                // dd('kjashdkjjj');
                                                if (Memberregistration::where('user_id', $user_id)->exists()) {
                                                    // Nếu user_id đã tồn tại, trả về thông báo lỗi
                                                    // dd('vao dc roi');
                                                    return redirect()->route('profileus')->with('error', 'Kết quả của bạn đang được ghi nhận. Xin vui lòng không spam.');
                                                } else {
                                                    $memberregistration = Memberregistration::create($data);
                                                    //  gọi hàm lưu hình anh để lưu vào thư mục và database
                                                    $ImagesmembersController = new ImagesmembersController();
                                                    $ImagesmembersController->store($request, $memberregistration->id);
                                                    // thông báo là đã đăng ký thành công
                                                    $notificationController = new NotificationController;
                                                    $notificationController->notifiMemberregistration($user_id, $memberregistration->id);
                                                    // dd('thanh cong');

                                                    return redirect()->route('page_confirm')->with('success', 'Đăng ký thành công.');
                                                }
                                            }
                                        } else {
                                            dd('khobg co chan dung');
                                            return redirect()->back()->with('error', 'Không có hình ảnh chân dung.');
                                        }
                                    } else {
                                        dd('cccd khong dung');
                                    }
                                } else if ($face_authentication['code'] == 407) {
                                    dd('Không nhận dạng được khuôn mặt');
                                } else if ($face_authentication['code'] == 408) {
                                    dd('Ảnh đầu vào không đúng định dạng');
                                } else if ($face_authentication['code'] == 409) {
                                    dd('Có nhiều hoặc ít hơn số lượng (2) khuôn mặt cần xác thực');
                                } else {
                                    dd('loi he thong');
                                }
                            } else {
                                dd('Hết key so sánh');
                            }
                        } else {
                            dd('loi');
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
        } else {
            dd('Hệ thống quá tải key');
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
                "api-key: 0pzTY7Ih0ZsP0VVOXshl7Ar7uSQvR0rw"
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
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập đăng ký.');
        } else {
            $user_id = auth()->id();
            $memberregistration = Memberregistration::where('user_id', $user_id)
                ->latest('updated_at') // Sắp xếp theo cột 'updated_at'
                ->first();
            // dd($memberregistration);
            return view('page.users.confirm-information', compact('memberregistration'));
        }
    }
    public function confirm(Request $request, $id)
    {

        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập.');
        }

        $user_id = auth()->id();

        // Xác thực dữ liệu đầu vào
        $request->validate([
            'fullname' => 'required|string|max:255',
            'description' => 'nullable|string',
            'idenerregistra_number' => 'required|string|max:255',
            'phone' => 'required|regex:/^[0-9]{9,13}$/',
            'gender' => 'required|in:1,2,3',
        ], [
            'fullname.required' => 'Họ và tên là bắt buộc.',
            'idenerregistra_number.required' => 'Số căn cước là bắt buộc.',
            'phone.required' => 'Số điện thoại là bắt buộc.',
            'gender.required' => 'Giới tính là bắt buộc.',
        ]);

        // Tìm bản ghi theo ID
        $memberregistration = Memberregistration::where('id', $id)
            ->where('user_id', $user_id)
            ->first();

        if (!$memberregistration) {
            return redirect()->back()->with('error', 'Bản ghi không tồn tại hoặc bạn không có quyền sửa đổi.');
        }

        // Cập nhật dữ liệu
        $memberregistration->update([
            'fullname' => $request->input('fullname'),
            'description' => $request->input('description'),
            'idenerregistra_number' => $request->input('idenerregistra_number'),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
        ]);

        // Trả về thông báo thành công và chuyển hướng
        return redirect()->route('profileus')->with('success', 'Cập nhật thành công.');
    }
}
