<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>posts</title>
</head>
<body>
    <!-- posts/index.blade.php -->
   <form action="/posts" method="POST">
        @csrf
<<<<<<< HEAD
        <label for="title">Title : </label>
        <input type="text" id="title" name="title"><br/>
        <label for="content">Content : </label>
        <input type="text" id="content" name="content"><br/>
=======
        <label for="titre">Titre : </label>
        <input type="text" id="titre" name="titre">
        <label for="post">post : </label>
        <input type="text" id="post" name="post">
        <label for="message">Message : </label>
        <input type="text" id="message" name="message">
>>>>>>> 5afc39dd61304f8c5800756bbe73187d2125b590
        <button>Envoyer!</button>
    </form>

     {{-- @foreach ($posts as $post)
    <div>
        <h2>{{$post->titre }}</h2>
        <p>{{ $post->post }}</p>
        <p>{{ $post->message }}</p>
        
    </div> 
   @endforeach  --}}

</body>
</html>
