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

Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');

Route::post('/posts',[PostController::class,'store']) ->name('posts.store');

Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('posts.edit');

Route::get('/posts/{post}/{category?}', [PostController::class,'extens'])->name('posts.extens');

Route::put('/posts/{post}',[PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/{post}',[PostController::class, 'delete'])->name('posts.delete');




/* Route::get('/prueba',function(){

    $post = new Post;

    $post->title ='tiTULOo de prueba 2';
    $post->content = 'contenido 2';
    $post->category = 'categoria';
    $post->save();

    // $post =Post::get();
    return $post;

}); */


