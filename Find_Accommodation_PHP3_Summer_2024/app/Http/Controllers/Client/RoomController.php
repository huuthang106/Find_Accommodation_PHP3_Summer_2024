<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Room;

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

        $room = Room::where('id', $id)->first();;
        return view('page.detail-room', compact('room'));
    }
}
