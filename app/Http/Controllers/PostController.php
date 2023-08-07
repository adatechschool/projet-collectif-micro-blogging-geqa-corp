<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    //
    public function allPosts()
    {
        $posts = Posts::get();
        return view('postsPage', compact('posts'));
    }
}