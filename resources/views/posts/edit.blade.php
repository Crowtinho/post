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


        <label for="titulo">Titulo</label>
        <input type="text" name="title" id="title" value="{{$post->title}}" required>
        <br><br>
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" value="{{$post->slug}}" required>
        <br><br>
        <label for="category">Categoria</label>
        <select name="category" id="category" required>
            <option value=""disabled selected>{{$post->category}}</option>
            <option value="drama">Drama</option>
            <option value="accion">Acción</option>
            <option value="ficcion">Ficción</option>
            <option value="romance">Romance</option>
        </select>
        <br><br>
        <label for="content">Contenido</label>
        <br>
        <textarea name="content" id="content" cols="30" rows="10" required>{{$post->content}}</textarea>
        <br><br>
        <button type="submit">Actualizar post</button>
        <button onclick="return confirm('¿Estás seguro de que deseas regresar, los datos no se actualizaran?');">
            <a href="/posts">Regresar</a>
        </button>
    </form>
</body>
</html>