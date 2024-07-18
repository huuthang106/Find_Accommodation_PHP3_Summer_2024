<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PriceList;

class PriceListAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getPriceListDetail()
    {
        $priceDetail = PriceList::all();
        return view('admincp.pages-pricing-detail', compact('priceDetail'));
    }

    public function getPriceListID($id)
    {
        $priceList = PriceList::where('id', $id)->first();
        // dd($priceList);
        return view('admincp.pages-edit-pricing', compact('priceList'));
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
    public function update(Request $request, $id)
    {
        $priceUpdate = PriceList::findOrFail($id); // Tìm giá theo id, nếu không tìm thấy sẽ bắt lỗi 404

        // Validate dữ liệu từ request
        $request->validate([
            'status' => 'required',
            'price' => 'required|numeric',
            'Support' => 'required',
            'Video_Posting' => 'required',
            'Post_Posting' => 'required',
            'description' => 'required',
        ]);

        // Cập nhật các trường dữ liệu
        $priceUpdate->status = $request->option('status');
        $priceUpdate->price = $request->input('price');
        $priceUpdate->Support = $request->input('Support');
        $priceUpdate->Video_Posting = $request->input('Video_Posting');
        $priceUpdate->Post_Posting = $request->input('Post_Posting');
        $priceUpdate->description = $request->input('description');

        // Lưu lại vào cơ sở dữ liệu
        $priceUpdate->save();

        // Redirect về trang danh sách hoặc trang chi tiết
        // return redirect()->back()->with('success', 'Cập nhật giá thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
