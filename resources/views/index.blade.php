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
   <h2>Formulaire de Connexion à la Base de Données</h2>
    <form method="post" action="/posts">
       
        <label for="nom">titre  :</label>
        @csrf
        <input type="text" id="titre" name="titre" required><br><br>

        <label for="email">post :</label>
        <input type="text" id="text" name="text" required><br><br>

        <label for="message">Message :</label>
        <textarea type="text" id="message" name="message" required></textarea><br><br>

        <input type="submit" value="Envoyer">
    </form>

    @foreach ($posts as $post)
    <div>
        <h2>{{ $post->content_post }}</h2>
        <p>{{ $post->description }}</p>
        <p>{{ $post->message }}</p>
        {{-- <p>User: {{ $user->username }}</p>--}}
        
    </div>
@endforeach

</body>
</html>