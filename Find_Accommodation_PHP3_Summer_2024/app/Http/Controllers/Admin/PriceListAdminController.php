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
        $price = PriceList::where('status', '!=', 5)->take(3)->get();
        return view('admincp.manages.extras-pricing', compact('price'));
     
    }
   
    
    

    public function ShowPriceList()
    {
        // Lấy tất cả các bản ghi với status khác 5
        $price = PriceList::where('status', '!=', 5)->take(3)->get();

        return view('admincp.extras-pricing', compact('price'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $price = PriceList::find($id);
        if ($price) {
            $price->status = 5;
            $price->save();
            return redirect()->back()->with('success', 'Gói tin đã được ẩn thành công.');
        }
        return redirect()->back()->with('error', 'Không tìm thấy gói tin.');
    }


    public function getPriceListDetail()
    {

        $price = PriceList::where('status', '!=', 5)->get();
        return view('admincp.manages.pages-pricing-detail', compact('price'));
    }

    public function getPriceListID($id)
    {
        $priceList = PriceList::where('id', $id)->first();
        // dd($priceList);
        return view('admincp.edit.pages-edit-pricing', compact('priceList'));
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
        // Validate dữ liệu từ request
        $request->validate([
            'status' => 'required|in:1,2,3', // Đảm bảo status chỉ nhận các giá trị 1, 2 hoặc 3
            'price' => 'required|numeric',
            'support' => 'required',
            'videoPosting' => 'required',
            'postPosting' => 'required',
            'description' => 'required',
        ]);

        // Tìm đối tượng PriceList theo $id
        $priceList = PriceList::findOrFail($id);

        // Cập nhật các trường dữ liệu từ request vào đối tượng PriceList
        $priceList->status = $request->input('status');
        $priceList->price = $request->input('price');
        $priceList->Support = $request->input('support');
        $priceList->Video_Posting = $request->input('videoPosting');
        $priceList->Post_Posting = $request->input('postPosting');
        $priceList->description = $request->input('description');

        // Lưu lại vào cơ sở dữ liệu
        $priceList->save();

        // Redirect về trang danh sách hoặc trang chi tiết (tuỳ theo yêu cầu của bạn)
        return redirect()->route('post-pricelist', ['id' => $priceList->id])
            ->with('success', 'Cập nhật giá thành công');
    }
}
