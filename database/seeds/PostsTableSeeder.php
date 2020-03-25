<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
            $newPost = New Post;
            $newPost->title = $faker->realText($maxNbChars = 50, $indexSize = 2);
            $newPost->author = $faker->name;
            $newPost->content = $faker->realText($maxNbChars = 350, $indexSize = 2);
            $newPost->localization = $faker->state;
            $newPost->save();
        }
    }
}
