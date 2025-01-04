<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        // return $post;
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return "aqui se muestra el formulario create";
    }

    public function show($id){
        // $posts=Post::all();
        $post = Post::findOrFail($id); //para llamar un solo registro
        return view('posts.show', compact('post'));
    }

    public function extens($post,$category = null){
        if ($category==null) {
            // $post = Post::find($post);
            return $post;
            // return "se mostrara el post {$post}";
        }else{
            return "se mostrara el post {$post} de la categoria {$category}";
        }
    }

}
