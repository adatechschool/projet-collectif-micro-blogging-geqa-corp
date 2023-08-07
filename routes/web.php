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

<<<<<<< HEAD
Route::post('/posts', function () {
    Posts::create([
        'title' => request('title'),
        'content' => request('content')
    ]);
    return redirect('/posts');
});
=======
Route::post('/posts', [PostController::class, 'store']); // Utilisez le contrôleur pour la route POST
>>>>>>> 5afc39dd61304f8c5800756bbe73187d2125b590

Route::get('/showPosts', [PostController::class, 'AllPosts'])->name('postsPage');








// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route::post('/posts', [PostController::class, 'store'])->name('store.index');
