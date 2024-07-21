<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Room;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($roomId)
    {
        $room = Room::findOrFail($roomId);
        $comments = $room->comments()->latest()->take(3)->get();

        return view('page.detail-room', compact('room', 'comments'));
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
        $request->validate([
            'content' => 'required',
            'room_id' => 'required|exists:rooms,id',
        ]);

        $comment = Comment::create([
            'user_id' => auth()->id(),
            'room_id' => $request->room_id,
            'content' => $request->content,
        ]);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'comment' => [
                    'user_name' => auth()->user()->username,
                    'content' => $comment->content,
                    'created_at' => $comment->created_at->format('d/m/Y H:i')
                ]
            ]);
        }

        return redirect()->back()->with('success', 'Bình luận đã được gửi.');
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
