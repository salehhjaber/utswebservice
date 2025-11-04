<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        $totalPosts = Post::countPosts();

        return view('posts', compact('posts', 'totalPosts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post-detail', compact('post'));
    }
}
