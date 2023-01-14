@extends('layout')
@section('content')
    {{-- form>(div>label+input)*2 --}}
    <form method='Post' action="{{route('posts.store')}}">
    @csrf
    @include('posts.form')

            <!-- <div>
                <label for='title' >Your title</label>
                <input name='title' id='title' type="text" value={{old('title')}}>
            </div>
            <div>
                <label for='content' >tour Content</label>
                <input name='content' id='content' type="text" value={{old('content')}}>
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
        <button type="submit" class="btn btn-block btn-warning"> Add Post </button>
    </form>

@endsection
