<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11/posts</title>
</head>
<body>
    <h1>Aqui se mostrara el contenido de los posts</h1>
    <table border="1" style="border-collapse: collapse; width: 80%;">
        <thead>
          <tr>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>contenido</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>
                    <a href="">{{$post->title}}</a>
                </td>
                <td>{{$post->category}}</td>
                <td>{{$post->content}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>