@extends('layout')

@section('title', $post->title)


@section('body')
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>

    <hr>
    <h5>Comments</h5>
    <div id="comments" style="margin-left: 20px">
    @forelse ($comments as $comment)
    
    <p><strong>{{$comment->name}}</strong></p>
    <p>{{$comment->message}}</p>
    @empty

    @endforelse
    </div>
    <hr>
    <h6>Add a Comment</h6>
    <div>
        <input type="hidden" id="postId" name="postId" value="{{$post->id}}">
        <input type="text" name="name" id="name" placeholder="Name"> <br>
        <input type="text" name="message" id="message" placeholder="Message"> <br>
        <button id="comment" class="btn btn-success btn-sm">Comment</button>
    </div> 
    <script> 
        document.getElementById('comment').addEventListener('click', ()=>{
            const name = document.getElementById('name').value;
            const message = document.getElementById('message').value;
            const postId = document.getElementById('postId').value;
            axios.post('http://localhost:8000/api/comments', {
                name: name,
                message: message,
                post_id: postId
            })
            .then(function (response) {
                const newComment= `<p><strong>${response.data.name}</strong></p> <p>${response.data.message}</p>`;
                $("#comments").fadeOut(400, ()=>{
                    document.getElementById('comments').innerHTML += newComment;
                    $('#comments').fadeIn();
                });
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
        })
        
    </script>
@endsection