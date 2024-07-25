<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Room;
use App\Http\Controllers\Client\NotificationController;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $comments = Comment::where('room_id', $id)
            ->with('user', 'replies.user')
            ->get();
        $room = Room::find($id);
        // Lấy tất cả hình ảnh liên quan đến phòng này
        $images = $room->images;

        // Lấy một hình ảnh ngẫu nhiên
        $randomImage = $images->isNotEmpty() ? $images->random() : null;
        return view('page.rooms.detail-room', compact('comments', 'room','randomImage','images'));
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
        $comment = new Comment();
        $comment->content = $request->content;
        $comment->user_id = auth()->id();
        $comment->room_id = $request->room_id;
        $comment->parent_id = $request->parent_id;
        $comment->save();

        // Tạo thông báo cho bình luận mới
        $notificationController = new NotificationController();
        $notificationController->notifyNewComment(auth()->id(), $comment->id);

        return response()->json([
            'success' => true,
            'comment' => [
                'id' => $comment->id,
                'user_name' => $comment->user->username,
                'avatar' => asset('assets/images/clinh4.jpeg'),
                'created_at' => $comment->created_at->format('d/m/Y H:i'),
                'content' => $comment->content,
                'room_id' => $comment->room_id,
            ]
        ]);
    }




    // app/Http/Controllers/Client/CommentController.php
    public function showAll($id)
    {
        $comments = Comment::where('room_id', $id)->get();

        return response()->json([
            'comments' => $comments->map(function ($comment) {
                return [
                    'user_name' => $comment->user->username,
                    'created_at' => $comment->created_at->format('d/m/Y H:i'),
                    'content' => $comment->content,
                    'parent_id' => $comment->parent_id,
                ];
            }),
        ]);
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
