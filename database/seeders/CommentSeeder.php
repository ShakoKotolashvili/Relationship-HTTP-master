<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            "name" => "Op. 9",
            "message" => "No. 2",
            "post_id" => 1
        ]);
        Comment::create([
            "name" => "C Sharp Minor",
            "message" => "No. 20",
            "post_id" => 1
        ]);
        Comment::create([
            "name" => "Op. 25",
            "message" => "No. 11",
            "post_id" => 2
        ]);
        Comment::create([
            "name" => "Op. 10",
            "message" => "No. 4 (Torrent)",
            "post_id" => 2
        ]);
    }
}
