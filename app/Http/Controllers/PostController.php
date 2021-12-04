<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        return view('blogs', [
            'title' => 'blogs',
            'posts' => Post::all()
        ]);
    }
    public function show($e)
    {
        return view('blogpost', [
            'title' => 'blogpost',
            'itemPost' => Post::find($e)
        ]);
    }
}
