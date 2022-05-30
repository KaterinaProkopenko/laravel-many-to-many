<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $newPost = new Post();
            $newPost->image = $faker->imageUrl(250, 150, null, false);
            $newPost->title = $faker->sentence(rand(3, 12));
            $newPost->description = $faker->paragraph(3);
            $newPost->text = $faker->paragraph(4);
            $newPost->author = $faker->name();
            $newPost->vote = $faker->randomFloat(3, 0, 9);
            $newPost->save();
        }
    }
}
