<?php

namespace Database\Seeders;

use App\Models\Img;
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
       $posts=Post::factory(100)->create();
       foreach($posts as $post){
        //llamammos al img factory
        Img::factory(1)->create([
            'imageable_id'=> $post->id,
            'imageable_type' =>Post::class
        ]);

        //para agregar 2 etiquetas a cada post
        $post->tag()->attach([
            rand(1,4),
            rand(5,8),

        ]);
       }
    }
}
