<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario para crear un nuevo post</h1>

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

    <form action="{{route('posts.store')}}" method="POST">

        @csrf
        <label for="titulo">Titulo</label>
        <input type="text" name="title" id="title" value="{{old('title')}}">
        <br><br>

{{--         <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" required>
        <br><br> --}}
        <label for="category">Categoria</label>
        <select name="category" id="category" >
            <option value="{{old('category')}}"disabled selected>{{old('category')}}</option>
            <option value="drama">Drama</option>
            <option value="accion">Acción</option>
            <option value="ficcion">Ficción</option>
            <option value="romance">Romance</option>
        </select>
        <br><br>
        <label for="content">Contenido</label>
        <br>
        <textarea name="content" id="content" cols="30" rows="10">{{old('content')}}</textarea>
        <br><br>
        <button type="submit" onclick="return confirm('¿Desea crear el post?');">Crear post</button>

        <button onclick="return confirm('¿Estás seguro de que deseas regresar, los datos se borraran?');">
            <a href="{{route('posts.index')}}" style="text-decoration: none; color: inherit;">Regresar</a>
        </button>
        
        {{-- <button><a href="/posts">Regresar</a></button> --}}


    </form>
</body>
</html>