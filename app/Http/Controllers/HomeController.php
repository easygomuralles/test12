<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('index', compact('posts'));
    }

    public function postDetail(Request $request)
    {
        $post = Post::whereSlug($request->slug)->firstOrFail();
        return view('post-detail', compact('post'));
    }
}
