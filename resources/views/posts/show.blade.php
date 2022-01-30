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
        <h1 class="title">
            {{$post->title}}
        </h1>
        <p class="edit">[<a href="/posts/{{$post->id}}/edit">edit</a>]</p>
        <div class="content">
            <div class="comment__post">
                <h3>本文</h3>
                <p>{{$post->body}}</p>
            </div>
        </div>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
@endsection