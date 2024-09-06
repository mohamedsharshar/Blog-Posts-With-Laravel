<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{

    public function create()
    {
        $comments = Comment::all();
        return view('comments.create', compact('comments'));
    }

    public function store()
    {
        request()->validate([
            'comment' => ['required', 'min:3'],
        ]);
        $comment=request()->comment;
        Comment::create([
            'comment' => $comment,

        ]);

       return to_route('comments.create')->with('success', 'Comment added successfully!');
    }
}
