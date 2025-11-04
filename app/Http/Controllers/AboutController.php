<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $author = [
            'nim' => '2301010138',
            'name' => 'L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI',
            'nickname' => 'DENAR',
            'description' => 'Mahasiswa yang passionate dalam pengembangan web dan teknologi. Senang menjelajahi destinasi wisata dunia dan mendokumentasikannya.',
            'email' => 'aranta@example.com',
            'skills' => ['Laravel', 'PHP', 'JavaScript', 'MySQL', 'Git']
        ];

        return view('about', compact('author'));
    }
}
