@extends('layout')
@section('content')
    <h1>List of posts</h1>
    {{-- @foreach ($posts as $post) --}}
        <h2>{{$post->title}}</h2>
        <p>{{$post->content}}</p>
        @if($post->active)
            Enabled
        @else
            Disabled
        @endif
        <em>{{$post->created_at}}</em>
    {{-- @endforeach --}}
    {{-- <h3>{!! $author !!}</h3> --}}
@endsection
