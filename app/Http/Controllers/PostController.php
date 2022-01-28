<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(Post $post)
    {
        return view("posts/index")->with(["posts" => $post->get()]);
    }
    public function show(Post $post){
        return view("posts/show")->with(["post" => $post]);
    }
    public function create()
    {
        return view('posts/create');
    }
    public function store(Post $post, Request $request){
        $input = $request["post"];
        $post->fill($input)->save();
        return redirect("/posts/" . $post->id);
    }
    
};
