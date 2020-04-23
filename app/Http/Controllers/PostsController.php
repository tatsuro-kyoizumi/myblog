<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        // $posts = Post::all();
        $posts = Post::latest()->get();
        // $posts = [];
        // $posts = Post::orderBy('created_at', 'desc')->get();
        // dd($posts->toArray()); //dump die
        return view('posts.index')->with('posts', $posts);
    }

    // public function show($id){
    public function show(Post $post){
        // $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }
}
