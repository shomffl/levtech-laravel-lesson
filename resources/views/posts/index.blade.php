@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        {{Auth::user()->name}}
        <h1>Blog Name</h1>
        <p class="create">[<a href="/posts/create">create</a>]</p>
        <div class="posts">
            @foreach ($posts as $post)
            <div class="post">
                <h2
                class="title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                <p class="body">{{$post->body}}</p>
            </div>
            <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="post" style="display:inline">
                @csrf
                @method("DELETE")
                <button type="submit" onclick="return checkDelete()">delete</button>
            </form>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            @endforeach
        </div>
        <script>
            function checkDelete(){
                const result = window.confirm("本当に削除しますか？");
                if (result){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
    </body>
</html>
@endsection