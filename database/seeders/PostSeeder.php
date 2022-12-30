<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            "title" => "Nocturnes",
            "body" => "Frederic Chopin"
        ]);
        Post::create([
            "title" => "Etudes",
            "body" => "Frederic Chopin"
        ]);
    }
}
