@extends('layout')

@section('title', 'Admin')



@section('body')
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <hr>
    <h5>Comments</h5>
    <div style="margin-left: 20px">
    @forelse ($comments as $comment)
        <p><strong>{{$comment->name}}</strong></p>
        <p>{{$comment->message}}</p>
        <a href="{{route('deleteComment', ['comment'=> $comment, 'post' => $post])}}"><button class="btn btn-danger btn-sm">Delete</button></a>
    @empty
        <h3>No Comments</h3>
    @endforelse
    </div>
@endsection