<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update form</title>
</head>
<body>
    <h1>Formulario para editar un post</h1>
    <form action="{{route('posts.update',$post)}}" method="POST">

        @csrf
        @method('PUT')
        @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
        @endif


        <label for="titulo">Titulo</label>
        <input type="text" name="title" id="title" value="{{old('title', $post->title)}}" >
        {{-- <label for="slug">Slug</label> --}}
        {{-- <input type="text" name="slug" id="slug" value="{{$post->slug}}" hidden> --}}
        <br><br>
        <label for="category">Categoria</label>
        <select name="category" id="category">
            <option value="" disabled selected>{{ old('category', $post->category) ? ucfirst(old('category', $post->category)) : 'Selecciona una categoría' }}</option>
            <option value="drama" {{ old('category', $post->category) == 'drama' ? 'selected' : '' }}>Drama</option>
            <option value="accion" {{ old('category', $post->category) == 'accion' ? 'selected' : '' }}>Acción</option>
            <option value="ficcion" {{ old('category', $post->category) == 'ficcion' ? 'selected' : '' }}>Ficción</option>
            <option value="romance" {{ old('category', $post->category) == 'romance' ? 'selected' : '' }}>Romance</option>
        </select>
        <br><br>         
        <label for="content">Contenido</label>
        <br>
        <textarea name="content" id="content" cols="30" rows="10" >{{old('content', $post->content)}}</textarea>
        <br><br>
        <button type="submit">Actualizar post</button>
        <button onclick="return confirm('¿Estás seguro de que deseas regresar, los datos no se actualizaran?');">
            <a href="/posts">Regresar</a>
        </button>
    </form>
</body>
</html>