<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class MainController extends Controller
{
    public function show()
    {
        $posts = Post::select()->get();
        return view('main.home', ['posts'=> $posts]);
    }

    public function showPost(Post $post)
    {
        $comments = $post->comments;
        return view('main.post', ['post'=> $post, 'comments' => $comments]);
    }
    
    public function createComment(Request $request)
    {
        $post_id = $request->input('post_id');
        $name = $request->input('name');
        $message = $request->input('message');
        Comment::create([
            "name" => $name,
            "message" => $message,
            "post_id" => $post_id
        ]);
        return response()->json($request->all());
    }
}
