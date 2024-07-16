<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Room;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        //
        $rooms = Room::where('status', 1)->take(40)->get();
        // Giới hạn tiêu đề chỉ lấy 10 ký tự đầu tiên
        $rooms = $rooms->map(function ($room) {
            $room->title = Str::limit($room->title, 20);
            $room->address = Str::limit($room->address, 20);
            return $room;
        });
        return view('index', compact('rooms'));
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
        $room = Room::where('id', $id)->first();
        
        return redirect()->route('comments.index', ['id' => $id]);
    }
    public function page_posting()
    {
        $categories = Category::where('status', 1)->get();
        $user = auth()->user();
        return view('page.rooms.posting-page', compact('categories', 'user'));
    }

    public function check_post_room()
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
            'quantity' => 'required|integer|min:0',
        ], [
            'Title.required' => 'Vui lòng nhập tiêu đề bài đăng.',
            'Description.required' => 'Vui lòng nhập mô tả.',
            'Price.required' => 'Vui lòng nhập giá.',
            'Price.regex' => 'Giá phải là một số.',
            'Phone.required' => 'Vui lòng nhập số điện thoại.',
            'Phone.regex' => 'Số điện thoại phải có từ 6 đến 15 chữ số.',
            'Address.required' => 'Vui lòng nhập địa chỉ.',
            'Category_id.required' => 'Vui lòng chọn loại.',
            'quantity.required' => 'Vui lòng nhập số lượng phòng trống.',
            'quantity.integer' => 'Số lượng phòng trống phải là số nguyên.',
            'quantity.min' => 'Số lượng phòng trống phải lớn hơn hoặc bằng 0.',
        ]);

        $data = request()->only('Title', 'Description', 'Price', 'Phone', 'Address', 'Category_id', 'quantity', 'user_id');

        Room::create($data);
        return redirect()->route('home');
    }

        public function page_edit_posting($id){
        
         if(Auth::check()){
            $user = Auth::user();
            $room = Room::find($id);  
            
            $categories = Category::where('status', 1)->get();  
                return view('page.rooms.edit-posting-room',compact('categories', 'room','user'));
         }else{
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập để sửa bài đăng.');
         }

        }


}
