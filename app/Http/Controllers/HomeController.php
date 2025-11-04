<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $featuredPosts = Post::latest()->take(6)->get();
        $totalPosts = Post::countPosts();
        $posts = Post::all(); // Mengambil SEMUA data posts



        return view('home', compact('featuredPosts', 'totalPosts'));
    }
}
