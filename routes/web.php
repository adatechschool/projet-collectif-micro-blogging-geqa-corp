<?php

use App\Models\Posts;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return view('index');
});

Route::post('/posts', function () {
    $post = new Posts();
    $post->title = request('title');
    $post->content = request('content');
    $post->save();
});








// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route::post('/posts', [PostController::class, 'store'])->name('store.index');