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
        return view('posts.create');
    }
    public function store(Request $request){
        //  return request()->title; 
        // return $request->all();
        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;

        $post->save();

        return redirect('/posts');

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
