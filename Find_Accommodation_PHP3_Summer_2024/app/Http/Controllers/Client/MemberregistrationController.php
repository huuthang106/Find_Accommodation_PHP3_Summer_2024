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
                                                    // return redirect()->route('profileus')->with('error', 'Kết quả của bạn đang được ghi nhận. Xin vui lòng không spam.');
                                                    return redirect()->route('profileus')->with(['error' => 'Kết quả của bạn đã được gửi. Xin vui lòng không spam.', 'showAlert' => true]);
                                                } else {
                                                    $memberregistration = Memberregistration::create($data);
                                                    //  gọi hàm lưu hình anh để lưu vào thư mục và database
                                                    $ImagesmembersController = new ImagesmembersController();
                                                    $ImagesmembersController->store($request, $memberregistration->id);
                                                    // thông báo là đã đăng ký thành công
                                                    $notificationController = new NotificationController;
                                                    $notificationController->notifiMemberregistration($user_id, $memberregistration->id);
                                                    // dd('thanh cong');

                                                    // return redirect()->route('page_confirm')->with('success', 'Đăng ký thành công.');
                                                    return redirect()->route('page_confirm')->with(['success' => 'Đăng ký thành công.', 'showAlert' => false]);
                                                }
                                            }
                                        } else {
                                            // dd('khobg co chan dung');
                                            // return redirect()->back()->with('error', 'Không có hình ảnh chân dung.');
                                            return redirect()->back()->with(['error' => 'Không có hình ảnh chân dung.', 'showAlert' => true]);
                                        }
                                    } else {
                                        // dd('cccd khong dung');
                                        return redirect()->back()->with(['error' => 'CCCD không đúng.', 'showAlert' => true]);
                                    }
                                } else if ($face_authentication['code'] == 407) {
                                    // dd('Không nhận dạng được khuôn mặt');
                                    return redirect()->back()->with(['error' => 'Không nhận dạng được khuôn mặt.', 'showAlert' => true]);
                                } else if ($face_authentication['code'] == 408) {
                                    // dd('Ảnh đầu vào không đúng định dạng');
                                    return redirect()->back()->with(['error' => 'Ảnh đầu vào không đúng định dạng.', 'showAlert' => true]);
                                } else if ($face_authentication['code'] == 409) {
                                    // dd('Có nhiều hoặc ít hơn số lượng (2) khuôn mặt cần xác thực');
                                    return redirect()->back()->with(['error' => 'Có nhiều hoặc ít hơn số lượng (2) khuôn mặt cần xác thực.', 'showAlert' => true]);
                                } else {
                                    dd('loi he thong');
                                    return redirect()->back()->with(['error' => 'Lỗi hệ thống!', 'showAlert' => true]);
                                }
                            } else {
                                // dd('Hết key so sánh');
                                return redirect()->back()->with(['error' => 'Hệ thống quá tải!', 'showAlert' => true]);
                            }
                        } else {
                            // dd('loi');
                            // return redirect()->back()->with('error', 'Không có hình ảnh nào được tải lên.');
                            return redirect()->back()->with(['error' => 'Không có hình ảnh nào được tải lên.', 'showAlert' => true]);
                        }
                    } catch (\Exception $e) {
                        // return redirect()->back()->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
                        return redirect()->back()->with(['error' => 'CCCD không đúng', 'showAlert' => true] . $e->getMessage());
                    }
                } else {
                    // Một trong các khóa không tồn tại hoặc rỗng
                    // dd('Lỗi: Không đủ dữ liệu cả 2 mặt. Vui lòng kiểm tra lại ảnh.');
                    return redirect()->back()->with(['error' => 'Không đủ dữ liệu cả 2 mặt. Vui lòng kiểm tra lại ảnh.', 'showAlert' => true]);
                }
            } else if ($Front_ID_recognition['errorCode'] === 1 || $Rear_ID_recognition['errorCode'] === 1) {
                // dd('Sai thông số trong request (ví dụ không có key hoặc ảnh trong request body)');
                return redirect()->back()->with(['error' => 'Sai thông số trong request (Ví dụ không có Key hoặc ảnh trong request body).', 'showAlert' => true]);
            } else if ($Front_ID_recognition['errorCode'] === 2 || $Rear_ID_recognition['errorCode'] === 2) {
                // dd('CMT trong ảnh bị thiếu góc nên không thể crop về dạng chuẩn');
                return redirect()->back()->with(['error' => 'CCCD trong ảnh bị thiếu góc nên không thể Crop về dạng chuẩn.', 'showAlert' => true]);
            } else if ($Front_ID_recognition['errorCode'] === 3 || $Rear_ID_recognition['errorCode'] === 3) {
                // dd('Hệ thống không tìm thấy CMT trong ảnh hoặc ảnh có chất lượng kém (quá mờ, quá tối/sáng).');
                return redirect()->back()->with(['error' => 'Hệ thống không tìm thấy CCCD trong ảnh hoặc ảnh có chất lượng kém (Quá mờ, quá tối/sáng).', 'showAlert' => true]);
            } else if ($Front_ID_recognition['errorCode'] === 5 || $Rear_ID_recognition['errorCode'] === 5) {
                // dd('Request sử dụng key image_url nhưng giá trị bỏ trống.');
                return redirect()->back()->with(['error' => 'Request sử dụng Key Image_Url nhưng giá trị bỏ trống.', 'showAlert' => true]);
            } else if ($Front_ID_recognition['errorCode'] === 6 || $Rear_ID_recognition['errorCode'] === 6) {
                // dd('Request sử dụng key image_url nhưng hệ thống không thể mở được URL này.');
                return redirect()->back()->with(['error' => 'Request sử dụng Key Image_Url nhưng hệ thống không thể mở được Url này.', 'showAlert' => true]);
            } else if ($Front_ID_recognition['errorCode'] === 7 || $Rear_ID_recognition['errorCode'] === 7) {
                // dd('File gửi lên không phải là file ảnh.');
                return redirect()->back()->with(['error' => 'File gửi lên không phải là File ảnh.', 'showAlert' => true]);
            } else if ($Front_ID_recognition['errorCode'] === 8 || $Rear_ID_recognition['errorCode'] === 8) {
                // dd('File ảnh gửi lên bị hỏng hoặc format không được hỗ trợ.');
                return redirect()->back()->with(['error' => 'File ảnh gửi lên bị hỏng hoặc format không được hỗ trợ.', 'showAlert' => true]);
            } else if ($Front_ID_recognition['errorCode'] === 9 || $Rear_ID_recognition['errorCode'] === 9) {
                // dd('Request sử dụng key image_base64 nhưng giá trị bỏ trống.');
                return redirect()->back()->with(['error' => 'Request sử dụng Key Image_Base64 nhưng giá trị bỏ trống.', 'showAlert' => true]);
            } else if ($Front_ID_recognition['errorCode'] === 10 || $Rear_ID_recognition['errorCode'] === 10) {
                // dd('Request sử dụng key image_base64 nhưng string cung cấp không hợp lệ..');
                return redirect()->back()->with(['error' => 'request sử dụng Key Image_Base64 nhưng String cung cấp không hợp lệ.', 'showAlert' => true]);
            } else {
                // dd('ko chạy đung dieu kien ');
                return redirect()->back()->with(['error' => 'Không chạy đúng điều kiện.', 'showAlert' => true]);
            }
        } else {
            // dd('Hệ thống quá tải key');
            return redirect()->back()->with(['error' => 'Hệ thống quá tải Key.', 'showAlert' => true]);
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
            'gender' => 'required|in:1,2',
        ], [
            'fullname.required' => 'Họ và tên là bắt buộc.',
            'idenerregistra_number.required' => 'Số căn cước là bắt buộc.',
            'phone.required' => 'Số điện thoại là bắt buộc.',
            'phone.regex' => 'Số điện thoại không đúng định dạng',
            'gender.required' => 'Giới tính là bắt buộc.',
        ]);

        // Tìm bản ghi theo ID
        $memberregistration = Memberregistration::where('id', $id)
            ->where('user_id', $user_id)
            ->first();

        if (!$memberregistration) {
            // return redirect()->back()->with('error', 'Bản ghi không tồn tại hoặc bạn không có quyền sửa đổi.');
            return redirect()->back()->with(['error' => 'Bảng ghi không tồn tại hoặc bạn không có quyền sửa đổi.', 'showAlert' => true]);
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
        // return redirect()->route('profileus')->with('success', 'Cập nhật thành công.');
        return redirect()->route('profileus')->with(['success' => 'Đăng ký thành công.', 'showAlert' => true]);
    }
}
