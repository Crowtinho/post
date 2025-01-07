<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();

        $post->title='titulo de prueba 1';
        $post->slug = 'titulo-de-prueba-1';
        $post->content = 'contenido de prueba 1';
        $post->category = 'categoria 1';
        $post->timestamps = now();
        $post->save();

        Post::factory(1000)->create();
        
    }
}
