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
    <form action="/posts" method="POST">

        @csrf
        <label for="titulo">Titulo</label>
        <input type="text" name="title" id="title" required>
        <br><br>
        <label for="category">Categoria</label>
        <select name="category" id="category" required>
            <option value=""disabled selected>Selecciona una categoria</option>
            <option value="drama">Drama</option>
            <option value="accion">Acción</option>
            <option value="ficcion">Ficción</option>
            <option value="romance">Romance</option>
        </select>
        <br><br>
        <label for="content">Contenido</label>
        <br>
        <textarea name="content" id="content" cols="30" rows="10" required></textarea>
        <br><br>
        <button type="submit">Crear post</button>
        <button><a href="/posts">Regresar</a></button>


    </form>
</body>
</html>