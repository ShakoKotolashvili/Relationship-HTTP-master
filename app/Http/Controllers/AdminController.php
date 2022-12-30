<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class AdminController extends Controller
{
    public function show()
    {
        $posts = Post::select()->get();
        return view('admin.home', ["posts" => $posts]);
    }
    public function createPost(Request $request){
        Post::create($request->all());
        return redirect()->route('admin');
    }
    public function showPost(Post $post){
        $comments = $post->comments;
        return view('admin.comments', ['comments' => $comments, 'post' => $post]);
    }
    public function deletePost(Post $post){
        $post->delete();
        Comment::where('post_id', '=', $post->id)->delete();
        return redirect()->route('admin');
    }
    public function deleteComment(Post $post, Comment $comment){
        $comment->delete();
        return redirect()->route('showPostAdmin', ['post' => $post]);
    }
}
