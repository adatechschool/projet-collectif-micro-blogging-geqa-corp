<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts</title>
</head>
<body>
    <!-- posts/index.blade.php -->
    <h1>Hello Edward et quentin</h1>

    @foreach ($posts as $post)
    <div>
        <h2>{{ $post->content_post }}</h2>
        <p>{{ $post->description }}</p>
       
    </div>
@endforeach

</body>
</html>