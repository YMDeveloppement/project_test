@extends('layout')
@section('content')
<ul class="list-group">
    <li class="list-group-item">



        <h1>List of posts</h1>
        @forelse ($posts as $post)
            <h2><a href="{{route('posts.show',['post'=>$post->id])}}">{{$post->title}}</a></h2>
            <p>{{$post->title}}</p>
            <em>{{$post->created_at->diffForHumans()}}</em>
            <a class="btn btn-warning" href="{{route('posts.edit',['post' => $post->id ])}}"Edit>Edit</a>
            <form class="form-inline" method='Post' action="{{route('posts.destroy',['post'=>$post->id])}}">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger" type="submit"> Delete Post </button>
            </form>
            @empty
               <h3>No Post</h3>
        @endforelse
    @endsection
    </li>
</ul>
