<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {

 

        Post::factory(5)->create();
        // $user = \App\Models\User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);
        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My family Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'lorem sdfkj sdkjfn',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum totam quae ut fugit non dolore repellat, adipisci perspiciatis. Vel reprehenderit totam repellat quidem? Minima itaque expedita similique dolorum cupiditate laudantium maxime alias. Magni, doloribus ex necessitatibus tenetur voluptatem iste, quasi nulla perspiciatis saepe omnis voluptatibus ratione expedita illo laudantium repellendus.</p>'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'lorem sdfkj sdkjfn',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum totam quae ut fugit non dolore repellat, adipisci perspiciatis. Vel reprehenderit totam repellat quidem? Minima itaque expedita similique dolorum cupiditate laudantium maxime alias. Magni, doloribus ex necessitatibus tenetur voluptatem iste, quasi nulla perspiciatis saepe omnis voluptatibus ratione expedita illo laudantium repellendus.</p>'
        // ]);
    }
}
