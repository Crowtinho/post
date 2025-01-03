<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 'seccion del post';
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
