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
        // Tìm danh sách rooms có category_id khớp với id đã cho
        $rooms = Room::where('category_id', $id)->with('category')->get();

        // Trả về view với dữ liệu rooms
        return view('page.rooms.category-motel', compact('rooms'));
    }







}
