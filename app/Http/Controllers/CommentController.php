<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function index()
    {
        // get all posts from database
        $comments = Comment::all();

        // pass data to view
        return view('comment.index', ['comments' => $comments]);
    }

    function show($id){
        $comment = Comment::findOrFail( $id );
        return view('comment.show', ['comment' => $comment]);
    }

    function create(){
        Comment::create([
            'content' => 'Comment 1',
            'author' => 'Author 1',
            'post_id' => 1
        ]);

    return redirect()->route('/comments');
    }
}
