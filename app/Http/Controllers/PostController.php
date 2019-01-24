<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show()
    {
        $post = Post::first();
        return view('welcome', compact('post'));
    }
}
