@extends('layout')

@section('title', 'Home')


@section('body')
    @forelse ($posts as $post)
        <a href="{{route('showPost', ['post'=> $post])}}"><h3>{{$post->title}}</h3></a>
        <p>{{$post->body}}</p>
        <br>
    @empty
        <h3>No Posts Available</h3>
    @endforelse
@endsection