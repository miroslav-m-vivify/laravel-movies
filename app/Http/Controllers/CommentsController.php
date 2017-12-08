<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request, $id) {
        $request->validate(Comment::STORE_RULES);
        $comment = new Comment();
        $comment->content = $request['content'];
        $comment->movie_id = $id;
        $comment->save();
        return redirect('/movies/' . $id);
    }
}