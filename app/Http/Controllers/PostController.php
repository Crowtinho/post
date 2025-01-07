<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class PostController extends Controller
{
    public function index(){

        // optenerlos paginados
        //$posts = Post::paginate();
        
        /* optener los posts
        $posts = Post::all();
        return $posts; */

        /* obtenerlos ordenados
        $posts = Post::orderBy('id','asc')->get(); */

        // obtenerlos ordenados y paginados
        $posts = Post::orderBy('id','asc')->paginate(10);
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

    public function show($post){
        // $posts=Post::all();
        // $post = Post::findOrFail($post); //para llamar un solo registro
        $post = Post::find($post);
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

    public function edit($post){
        $post = Post::find($post);
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, $post){
        // return "aqui se actualizara el post {$post}";
        $post = Post::find($post);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;

        $post->save();

        return redirect("/posts/{$post->id}");

    }
    public function destroy($post){
        $post = Post::find($post);
        $post->delete();
        return redirect("/posts");
    }

}
