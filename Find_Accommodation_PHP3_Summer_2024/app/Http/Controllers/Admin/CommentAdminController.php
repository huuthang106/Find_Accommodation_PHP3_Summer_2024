<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::with(['user', 'room'])->where('status', 1)->get();
        return view('admincp.manages.pages-comment', compact('comments'));
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
    public function trash()
    {
        // Logic để hiển thị các bình luận đã bị ẩn hoặc bị xóa
        $trashedComments = Comment::where('status', 5)->get();
        return view('admincp.manages.pages-trash-comment', compact('trashedComments'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::find($id);
        if ($comment) {
            $comment->status = 5;
            $comment->save();
            return redirect()->back()->with('success', 'Bình luận đã được ẩn thành công.');
        }
        return redirect()->back()->with('error', 'Không tìm thấy bình luận.');
    }

    public function restore($id)
    {
        $comment = Comment::find($id);
        if ($comment && $comment->status == 5) {
            $comment->status = 1;
            $comment->save();
            return redirect()->back()->with('success', 'Bình luận đã được khôi phục thành công.');
        }
        return redirect()->back()->with('error', 'Không tìm thấy bình luận.');
    }

    public function deletePermanent($id)
    {
        $comment = Comment::find($id);
        if ($comment && $comment->status == 5) {
            $comment->delete();
            return redirect()->back()->with('success', 'Bình luận đã được xóa vĩnh viễn.');
        }
        return redirect()->back()->with('error', 'Không tìm thấy bình luận.');
    }


}
