<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/',[HomeController::class]);
Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/create',[PostController::class,'create']);
Route::get('/posts/{post}/{category?}', [PostController::class,'extens']);

Route::get('/prueba',function(){

    $post = new Post;

    $post->title ='tiTULOo de prueba 2';
    $post->content = 'contenido 2';
    $post->category = 'categoria';
    $post->save();

    // $post =Post::get();
    return $post;

});


