<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('index', compact('posts'));
    }

    public function store(Request $request)

    {
        $request->validate([
            'titre' => 'required',
            'text' => 'required',
            'message' => 'required',
        ]);


        $post = new Posts();
        $post->titre = $request->input('titre');
        $post->text = $request->input('text');
        $post->message = $request->input('message');
        $post->save();
    

        return redirect()->route('index');
    }
}