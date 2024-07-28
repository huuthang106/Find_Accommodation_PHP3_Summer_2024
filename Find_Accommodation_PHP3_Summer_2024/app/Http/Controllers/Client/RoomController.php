<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Room;
use App\Models\Category;
use App\Models\Areas;
use App\Http\Controllers\Client\ImageController;
use Illuminate\Support\Facades\Auth;
use App\Htt\Controller\client\NofiController;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        //
        $rooms = Room::where('status', 1)->orderBy('created_at', 'desc')->take(20)->get();
        
        // Giới hạn tiêu đề chỉ lấy 10 ký tự đầu tiên
        $rooms = $rooms->map(function ($room) {
            $room->title = Str::limit($room->title, 20);
            $room->address = Str::limit($room->address, 20);
            $room->price = number_format($room->price, 0, ',', '.');
            // Sử dụng toán tử Elvis để lấy hình ảnh ngẫu nhiên nếu có
            // isNotEmpty()một phương thức của Collection giúp kiểm tra tính đầy đủ của tập hợp một cách nhanh chóng và rõ ràng
            $room->randomImage = $room->images->isNotEmpty() ? $room->images->random()->image : null;
            return $room;
        });

        return view('index', compact('rooms'));
    }

    public function reportRoom($roomId)
    {
        $room = Room::findOrFail($roomId);
        $room->status = 1;
        $room->save();

        return redirect()->back()->with('success', 'Room status updated successfully.');
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
    public function getRoomID($id)
    {
        // $room = Room::where('id', $id)->first();;
        // return view('page.rooms.detail-room', compact('room'));
        $rooms = Room::where('id', $id)->first();

        return redirect()->route('comments.index', ['id' => $id]);
    }
    public function page_posting()
    {
        $categories = Category::where('status', 1)->get();
        $areas = Areas::where('status', 1)->get();
        $user = auth()->user();
        return view('page.rooms.posting-page', compact('categories', 'user', 'areas'));
    }

    public function check_post_room(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập để đăng bài.');
        }

        // Lấy user_id
        $user_id = auth()->id();

        // Thêm user_id vào request
        request()->merge(['user_id' => $user_id]);

        // Bắt lỗi
        request()->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'Phone' => 'required|regex:/^[0-9]{6,15}$/',
            'Address' => 'required',
            'Category_id' => 'required',
            'area_id' => 'required', // Thêm dòng này để kiểm tra area_id
            'quantity' => 'required|integer|min:0',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Xác thực từng tệp hình ảnh
        ], [
            'Title.required' => 'Vui lòng nhập tiêu đề bài đăng.',
            'Description.required' => 'Vui lòng nhập mô tả.',
            'Price.required' => 'Vui lòng nhập giá.',
            'Price.regex' => 'Giá phải là một số.',
            'Phone.required' => 'Vui lòng nhập số điện thoại.',
            'Phone.regex' => 'Số điện thoại phải có từ 6 đến 15 chữ số.',
            'Address.required' => 'Vui lòng nhập địa chỉ.',
            'Category_id.required' => 'Vui lòng chọn loại.',
            'area_id.required' => 'Vui lòng chọn khu vực.', // Thêm dòng này để thông báo lỗi cho area_id
            'quantity.required' => 'Vui lòng nhập số lượng phòng trống.',
            'quantity.integer' => 'Số lượng phòng trống phải là số nguyên.',
            'quantity.min' => 'Số lượng phòng trống phải lớn hơn hoặc bằng 0.',
            'images.*.required' => 'Không bỏ trống.',
            'images.*.image' => 'Tất cả các tệp phải là hình ảnh.',
            'images.*.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, hoặc gif.',
            'images.*.max' => 'Kích thước hình ảnh không được vượt quá 2048 kilobytes (2MB).',
        ]);

        $data = $request->only('Title', 'Description', 'Price', 'Phone', 'Address', 'Category_id', 'quantity', 'area_id', 'user_id');

        // Tạo phòng nguyen huu thang xử lý hình ảnh
        $room = Room::create($data);

        // Kiểm tra xem có hình ảnh nào không
        if ($request->hasFile('images') && count($request->file('images')) > 0) {
            // Lưu hình ảnh
            $imageController = new ImageController();
            $imageController->store($request, $room->id);
            $notificationController = new NotificationController;
            $notificationController->notifiAddRoom($user_id, $room->id);
            return redirect()->route('profileus')->with('success', 'Đăng bài thành công.');
        } else {
            // Xóa phòng nếu không có hình ảnh
            $room->delete();

            return redirect()->back()->with('error', 'Đăng bài thất bại');
        }
    }
    public function update_post_room(Request $request, $roomId)
    {

        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập để cập nhật bài đăng.');
        }

        // Lấy user_id
        $user_id = auth()->id();

        // Thêm user_id vào request
        request()->merge(['user_id' => $user_id]);

        // // Bắt lỗi
        request()->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'Phone' => 'required|regex:/^[0-9]{6,15}$/',
            'Address' => 'required',
            'Category_id' => 'required',
            // 'area_id' => 'required', // Thêm dòng này để kiểm tra area_id
            'quantity' => 'required|integer|min:0',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Xác thực từng tệp hình ảnh
        ], [
            'Title.required' => 'Vui lòng nhập tiêu đề bài đăng.',
            'Description.required' => 'Vui lòng nhập mô tả.',
            'Price.required' => 'Vui lòng nhập giá.',
            'Price.regex' => 'Giá phải là một số.',
            'Phone.required' => 'Vui lòng nhập số điện thoại.',
            'Phone.regex' => 'Số điện thoại phải có từ 6 đến 15 chữ số.',
            'Address.required' => 'Vui lòng nhập địa chỉ.',
            'Category_id.required' => 'Vui lòng chọn loại.',
            // 'area_id.required' => 'Vui lòng chọn khu vực.', // Thêm dòng này để thông báo lỗi cho area_id
            'quantity.required' => 'Vui lòng nhập số lượng phòng trống.',
            'quantity.integer' => 'Số lượng phòng trống phải là số nguyên.',
            'quantity.min' => 'Số lượng phòng trống phải lớn hơn hoặc bằng 0.',

            'images.*.image' => 'Tất cả các tệp phải là hình ảnh.',
            'images.*.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, hoặc gif.',
            'images.*.max' => 'Kích thước hình ảnh không được vượt quá 2048 kilobytes (2MB).',
        ]);
        // dd($request);

        // Lấy phòng cần cập nhật
        $room = Room::findOrFail($roomId);

        // // Cập nhật thông tin phòng
        $room->update($request->except('images')); // Cập nhật các thông tin khác, không bao gồm hình ảnh

        if ($request->hasFile('images') && count($request->file('images')) > 0) {
            // Xóa hình ảnh cũ
            $imageController = new ImageController();
            // $imageController->delete($room->id);

            // Lưu hình ảnh mới
            $imageController->store($request, $room->id);

            $notificationController = new NotificationController();
            $notificationController->notifiUpdateRoom($user_id, $room->id);

            return redirect()->route('profileus')->with('success', 'Cập nhật bài đăng thành công.');
        } else {
            // Chỉ cập nhật thông tin khác nếu không có hình ảnh
            $notificationController = new NotificationController();
            $notificationController->notifiUpdateRoom($user_id, $room->id);

            return redirect()->route('profileus')->with('success', 'Cập nhật bài đăng thành công.');
        }
    }


    public function page_edit_posting($id)
    {

        if (Auth::check()) {
            $user = Auth::user();
            $room = Room::find($id);

            $categories = Category::where('status', 1)->get();
            return view('page.rooms.edit-posting-room', compact('categories', 'room', 'user'));
        } else {
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập để sửa bài đăng.');
        }
    }
    //Phương thức xóa chuyển status==7 [Nguyen Thai Toan]
    public function delete($id)
    {
        // Tìm room theo id
        $room = Room::find($id);

        // Kiểm tra nếu room không tồn tại
        if (!$room) {
            return abort(404, 'Room not found');
        }

        // Cập nhật status thành 7 để xóa mềm
        $room->status = 7;
        $room->save();
        return redirect()->route('profileus')->with('success', 'Xóa thành công');
    }
}
