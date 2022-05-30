<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = ['Beginner Tutorials', 'Featured', 'Pirate interviews', 'Pirate News', 'WordPress', 'WordPress Plugins', 'WordPress Tools'];
        for($i = 0; $i < count($categories); $i++){
            $newCategory = new Category();
            $newCategory->category = $categories[$i];
            $newCategory->color = $faker->unique()->hexColor();
            $newCategory->save();
        }


    }
}
