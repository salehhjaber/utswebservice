<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $totalPosts = Post::count();

        return view('home', [
            'posts' => $posts,
            'totalPosts' => $totalPosts,
            'title' => 'Home'
        ]);
    }
}
