<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function notifiAddRoom($userId,$roomId){
        Notification::create([
            'type' => 'Thông báo đăng bài',
            'data' => 'Bạn vừa đăng bài thành công.',
            'message' => 'Bạn vừa đăng bài thành công.',
            'user_id' => $userId,
            'room_id' => $roomId,
            'status' => 4,
        ]);

    }
    public function notifiMemberregistration($userId,$memberregistration_id){
        Notification::create([
            'type' => 'Thông báo đăng ký thành viên',
            'data' => 'Bạn vừa đăng ký thành viên thành công.',
            'message' => 'Bạn vừa đăng ký thành viên thành công.',
            'user_id' => $userId,
            'memberregistration_id' => $memberregistration_id,
            'status' => 1,
        ]);

    }
}
