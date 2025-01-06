<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Laravel 11/posts</title>
</head>
<body>
    <h1>Aqui se mostrara el contenido de los posts</h1>
    <button class="boton" onclick="return confirm('¿Desea crear un post?');">
      <a href="/posts/create">Nuevo post</a>
    </button>
    <br>
    <br>
    <table border="1" style="border-collapse: collapse; width: 100%;">
        <thead>
          <tr>
            <th style="width: 20%">Titulo</th>
            <th style="width: 15%">Categoria</th>
            <th>contenido</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>
                    <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                </td>
                <td>{{$post->category}}</td>
                <td>{{$post->content}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <br>

      {{-- Boton de anterior --}}
      @if ($posts->currentPage() >1)
      <button><a href="{{$posts->previousPageUrl()}}">anterior</a></button>
      @endif

      {{-- Boton de siguiente --}}
      @if ($posts->hasMorePages())
      <button class="boton"><a href="{{$posts->nextPageUrl()}}">siguiente</a></button>
      @endif
</body>
</html>