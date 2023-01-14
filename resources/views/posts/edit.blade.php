@extends('layout')
@section('content')
    {{-- form>(div>label+input)*2 --}}
    <form method='Post' action="{{route('posts.update',['post'=>$post->id])}}">
    @csrf
    @include('posts.form')
    @method("PUT")
        <!-- <div>
            <label for='title' >Your title</label>
            <input name='title' id='title' type="text" value="{{old('title',$post-> title)}}">
        </div>
        <div>
            <label for='content' >tour Content</label>
            <input name='content' id='content' type="text" value="{{old('content',$post-> content)}}">
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
        <button class="btn btn-block btn-success" type="submit"> Update Post </button>
    </form>

@endsection
