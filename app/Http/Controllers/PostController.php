<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        // get all posts from database
        $posts = Post::all();

        // pass data to view
        return view('post.index', ['posts' => $posts]);
    }

    function show($id){
        $post = Post::findOrFail( $id );
        return view('post.show', ['post' => $post]);
    }

    function create(){
        Post::create([
            'title' => 'Post 1',
            'content' => 'Content 1',
            'author' => 'Author 1',
            'published' => true
        ]);

        return redirect()->route('/blog');
    }

    function delete($id){
        Post::destroy( $id );
        return redirect()->route('/blog');
    }
}
