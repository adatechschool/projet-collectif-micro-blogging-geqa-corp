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
<<<<<<< HEAD
=======

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'post' => 'required',
            'message' => 'required'
        ]);

        Posts::create([
            'titre' => request('titre'),
            'post' => request('post'),
            'message' => request('message')
        ]);

        return redirect('/posts');
    }
>>>>>>> 5afc39dd61304f8c5800756bbe73187d2125b590
}