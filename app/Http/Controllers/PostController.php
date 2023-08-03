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
            'post' => 'required',
            'message' => 'required',
        ]);
       

       
        
        

        return redirect()->route('index');
    }
}
