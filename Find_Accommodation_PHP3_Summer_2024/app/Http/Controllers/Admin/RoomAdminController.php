<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Category;

class RoomAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rooms = Room::where('status', '!=', 5)->get();
        return view('admincp.manages.pages-room', compact('rooms'));
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
        // $room=Room::where('id', $id)->get();

        // return view('admincp.pages-notification-detail',compact('room'));

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
        $room = Room::find($id);
        if ($room) {
            $room->status = 5;
            $room->save();
            return redirect()->back()->with('success', 'Phòng đã được ẩn thành công.');
        }
        return redirect()->back()->with('error', 'Không tìm thấy phòng.');
    }

    public function getRoomID($id)
    {
        $roomDetail = Room::with('category', 'user')->find($id);
        // $categoryName = $roomDetail->category ? $roomDetail->category->name : null;
        return view('admincp.pages-room-detail', compact('roomDetail'));
    }

}
