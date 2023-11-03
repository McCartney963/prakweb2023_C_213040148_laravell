<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
       return view('posts', [
        "title" => "All Posts",
        //"posts"=> Post::all(),
        "posts"=> Post::with(['author', 'category'])->lates()->get()
       ]);
        
    }
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
