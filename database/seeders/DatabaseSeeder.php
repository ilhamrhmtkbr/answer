<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'post_one',
            'slug' => 'post-one',
            'content' => 'content-one'
        ]);

        Post::create([
            'title' => 'post_two',
            'slug' => 'post-two',
            'content' => 'content-two'
        ]);
        Post::create([
            'title' => 'post_three',
            'slug' => 'post-three',
            'content' => 'content-three'
        ]);
        Post::create([
            'title' => 'post_four',
            'slug' => 'post-four',
            'content' => 'content-four'
        ]);
        Post::create([
            'title' => 'post_five',
            'slug' => 'post-five',
            'content' => 'content-five'
        ]);
        Post::create([
            'title' => 'post_six',
            'slug' => 'post-six',
            'content' => 'content-six'
        ]);
        Post::create([
            'title' => 'post_seven',
            'slug' => 'post-seven',
            'content' => 'content-seven'
        ]);
        Post::create([
            'title' => 'post_eight',
            'slug' => 'post-eight',
            'content' => 'content-eight'
        ]);
        Post::create([
            'title' => 'post_nine',
            'slug' => 'post-nine',
            'content' => 'content-nine'
        ]);
        Post::create([
            'title' => 'post_ten',
            'slug' => 'post-ten',
            'content' => 'content-ten'
        ]);
    }
}
