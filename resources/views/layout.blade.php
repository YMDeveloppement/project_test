<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <link rel="stylesheet" href="{{mix('/css/theme.css')}}">
    <title>Document</title>
</head>
<body>
    @if(session()->has('status'))
        <h3 style="color:green"> {{session()->get('status')}} </h3>
    @endif
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">

            <a class="nav-item nav-link active" href="/home">Home</a><br>
            <a class="nav-item nav-link" href="/about">about</a><br>
            <a class="nav-item nav-link" href="/posts">post</a><br>
            <a class="nav-item nav-link" href="{{ route('posts.create') }}">New post</a><br>

    </div>
</nav>

    <!-- <a href="/home">Home</a><br>
    <a href="/about">about</a><br>
    <a href="/posts">post</a><br>
    <a href="{{ route('posts.create') }}">New post</a><br>
    {{-- <a href="posts/create">New post</a><br> --}} -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
