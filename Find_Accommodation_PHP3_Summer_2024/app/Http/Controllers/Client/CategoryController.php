<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Room;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Cái này là admin 
        // $category = Category::all();
        // dd($category);


        // Cái này là user
        return view('page.rooms.category-motel');
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

    //Lay id cua category[Nguyen Thai Toan]
    public function getIDCategory(string $id)
    {
        // Tìm room đầu tiên có id khớp với id đã cho (hoặc bạn có thể tìm một room bất kỳ tùy vào yêu cầu của bạn)
        $room = Room::where('category_id', $id)->first();

        // Kiểm tra nếu room không tồn tại
        if (!$room) {
            return abort(404, 'Room not found');
        }

        // Lấy giá trị category_id từ đối tượng room
        $category_id = $room->category_id;

        // Lấy danh sách rooms có category_id khớp với category_id đã lấy được
        $rooms = Room::where('category_id', $category_id)->get();

        // Kiểm tra dữ liệu trả về của rooms

        // Trả về view với dữ liệu rooms
        return view('page.rooms.category-motel', compact('rooms'));
    }







}
