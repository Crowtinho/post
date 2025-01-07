<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Laravel 11/posts</title>
</head>
<body>
    <h1>Aqui se mostrara el contenido de los posts</h1>
    <br>
    
    <button class="boton" onclick="return confirm('¿Desea crear un post?');">
      {{-- <a href="/posts/create">Nuevo post</a> --}}
      <a href="{{route('posts.create')}}">Nuevo post</a>
    </button>
    <br>
    <br>
    {{ $posts->links() }}
    <table class="table table-bordered table-striped table-hover">
    {{-- <table border="1" style="border-collapse: collapse; width: 100%;"> --}}
        <thead>
          <tr>
            <th style="width: 20%">Titulo</th>
            <th style="width: 10%">Categoria</th>
            <th >contenido</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td style="text-align:justify">
                    {{-- <a href="/posts/{{$post->id}}">{{$post->title}}</a> --}}
                    <a href="{{route('posts.show',$post)}}">{{$post->title}}</a>
                </td>
                <td>{{$post->category}}</td>
                <td style="text-align:justify">{{$post->content}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <br>
    {{ $posts->links() }}


      
      {{-- Boton de anterior  --}}
      {{-- @if ($posts->currentPage() >1)
      <button><a href="{{$posts->previousPageUrl()}}">anterior</a></button>
      @endif  --}}

      {{-- Boton de siguiente  --}}
      {{-- @if ($posts->hasMorePages())
      <button class="boton"><a href="{{$posts->nextPageUrl()}}">siguiente</a></button>
      @endif --}}
</body>
</html>