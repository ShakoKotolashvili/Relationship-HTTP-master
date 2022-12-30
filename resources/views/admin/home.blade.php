@extends('layout')

@section('title', 'Admin')


@section('body')
    
    @forelse ($posts as $post)
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
        <a href="{{route('showPostAdmin', ['post'=>$post])}}"><button class="btn btn-primary btn-sm">Post Page</button></a>
        <a href="{{route('deletePost', ['post' => $post])}}"><button class="btn btn-danger btn-sm">Delete</button></a>

    @empty
        <h1>There are no Posts</h1>
    @endforelse
    <hr>
    <h3>Add a Post</h3>
    <form method="post">
        @csrf
        <input type="text" name="title" placeholder="Post Title"> <br>
        <textarea name="body" cols="40" rows="5"></textarea> <br>
        <button class="btn btn-success" type="submit">Post</button>
    </form>
@endsection