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

    public function extens($post,$category = null){
        if ($category==null) {
            return "se mostrara el post {$post}";
        }else{
            return "se mostrara el post {$post} de la categoria {$category}";
        }
    }

}
