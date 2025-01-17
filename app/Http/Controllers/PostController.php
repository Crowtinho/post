<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreatedMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $posts = Post::orderBy('title','asc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }
    public function store(StorePostRequest $request){
        //  return request()->title; 
        // return $request->all();

   /*      $request->validate([
            'title' => 'required',
            // 'slug' => 'required',
            'category' => 'required',
            'content' => 'required', 
        ],[
            // aqui se ponen los mensajes
        ],[
            // aqui se ponen los atributos
        ]);
 */
        $post = Post::create($request->all());
/*         $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->slug = $request->slug;

        $post->save(); */
        Mail::to('prueba@prueba.com')->send(new PostCreatedMail($post));

        return redirect()->route('posts.index');

    }

    public function show( Post $post){
        // $posts=Post::all();
        // $post = Post::findOrFail($post); //para llamar un solo registro
        // $post = Post::findOrFail($post);
        return view('posts.show', compact('post'));
    }

    
    public function edit(Post $post){
        // $post = Post::find($post);
        return view('posts.edit',compact('post'));
    }
    
    public function update(Request $request, Post $post){
        // return "aqui se actualizara el post {$post}";
        // $post = Post::find($post);
        $request->validate([
            'title' => 'required',
            'slug' => "unique:posts,slug,{$post->id}",
            'category' => 'required',
            'content' => 'required', 
        ]);
        $post->update($request->all());
    /*     $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->slug = $request->slug; */
        
        
        $post->save();
        
        return redirect()->route('posts.index');
        
    }
    public function destroy(Post $post){
        // $post = Post::find($post);
        $post->delete();
        return redirect()->route('posts.index');
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
