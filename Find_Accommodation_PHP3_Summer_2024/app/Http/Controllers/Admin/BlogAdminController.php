<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blogs; 

class BlogAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
    }
   // app/Http/Controllers/BlogController.php
   public function Showblog()
    {
        $blog = Blogs::where('status', '!=', 5)->get();
        return view('admincp.manages.extras-blog', compact('blog'));
    }

    // Hiển thị form thêm blog
    public function create()
    {
        return view('admincp.add.add-blog');
    }

    // Xử lý việc lưu blog mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required|integer|exists:users,id',
        ]);
    
        Blogs::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'user_id' => $validatedData['user_id'],
            'status' => 1,  // Provide a default value for status
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        return redirect()->route('quan-li-blog')->with('success', 'Blog đã được thêm thành công.');
    }

    // Xóa blog
    public function deleteBlog($id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->status = 5;
        $blog->save();

        return redirect()->route('quan-li-blog')->with('success', 'Blog đã được ẩn.');
    }
    
    /**
     * Show the form for creating a new resource.
     */
 

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
