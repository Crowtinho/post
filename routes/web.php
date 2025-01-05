<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/',[HomeController::class,'index']);
Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create']);
Route::post('posts',[PostController::class,'store']);
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.sow');
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


