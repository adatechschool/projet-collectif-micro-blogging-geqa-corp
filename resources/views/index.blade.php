<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/app.css">
    <title>posts</title>
</head>
<body>
    <!-- posts/index.blade.php -->
   <form action="/posts" method="POST">
        @csrf
        <label for="title">Title : </label>
        <input type="text" id="title" name="title">
        <label for="content">Content : </label>
        <input type="text" id="content" name="content">
        <button>Envoyer!</button>
    </form>

    {{-- @foreach ($posts as $post)
    <div>
        <h2>{{ $post->content_post }}</h2>
        <p>{{ $post->description }}</p>
        <p>{{ $post->message }}</p>
        {{-- <p>User: {{ $user->username }}</p>--}}
        
    {{-- </div> --}}
    {{-- @endforeach --}}

</body>
</html>