<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;

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
        // Form để tạo bình luận mới
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        // Xử lý lưu bình luận mới
        $validated = $request->validated();

        Comment::create([
            'content' => $validated['content'],
            'room_id' => $validated['room_id'],
            'user_id' => $validated['user_id'],
            'status' => 1,
        ]);

        return redirect()->back()->with('success', 'Bình luận đã được tạo thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Hiển thị chi tiết bình luận
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Form để chỉnh sửa bình luận
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentRequest $request, string $id)
    {
        $validated = $request->validated();

        $comment = Comment::find($id);
        if ($comment) {
            $comment->update([
                'content' => $validated['content'],
                'room_id' => $validated['room_id'],
                'user_id' => $validated['user_id'],
            ]);

            return redirect()->back()->with('success', 'Bình luận đã được cập nhật thành công.');
        }

        return redirect()->back()->with('error', 'Không tìm thấy bình luận.');
    }

    public function trash()
    {
        $trashedComments = Comment::where('status', 5)->get();
        return view('admincp.manages.pages-trash-comment', compact('trashedComments'));
    }

    public function destroy(string $id)
{
    $comment = Comment::find($id);
    if ($comment) {
        $comment->status = 5;
        $comment->save();
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false]);
}


public function restore($id)
{
    $comment = Comment::find($id);
    if ($comment && $comment->status == 5) {
        $comment->status = 1;
        $comment->save();
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false]);
}

public function deletePermanent($id)
{
    $comment = Comment::find($id);
    if ($comment && $comment->status == 5) {
        $comment->delete();
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false]);
}

}




