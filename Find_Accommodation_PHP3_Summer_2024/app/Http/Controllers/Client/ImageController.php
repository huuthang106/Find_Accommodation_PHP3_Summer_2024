<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
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
    public function store(Request $request,$id)
    {

        //xử lý hình ảnh Nguyen Huu Thang
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $roomId =$id; // Thay thế bằng room_id thực tế

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images'), $name);
                Image::create([
                    'room_id' => $roomId,
                    'image' => $name,
                ]);
            }
        }

        return back()->with('success', 'Hình ảnh được tải lên thành công');
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
