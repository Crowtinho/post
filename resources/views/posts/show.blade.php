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
        <a href="{{route('posts.index')}}">Volver al post</a>
    </button>
    <button onclick="return confirm('¿Estás seguro que desea editar  el post?');">
        <a href="{{route('posts.edit',$post)}}">Editar</a>
    </button>
    <br>
    <br>

    <form action="{{route('posts.destroy',$post)}}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este elemento?');">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
    


{{--     <form action="/posts/{{$post->id}}" method="POST">

        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form> --}}
    
</body>
</html>
