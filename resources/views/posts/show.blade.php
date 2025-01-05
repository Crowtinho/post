<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <h2>Categoria: {{ $post->category }}</h2>
    <p>{{ $post->content }}</p>
    <button>
        <a href="/posts">Volver al post</a>
    </button>
    <button>
        <a href="/posts/{{$post->id}}/edit">Editar</a>
    </button>
    <br>
    <br>
    <form action="/posts/{{$post->id}}" method="POST">

        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
    
</body>
</html>
