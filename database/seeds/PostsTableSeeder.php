<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Posts;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 40; $i++){

            $newPost = new Posts();

            $newPost->author = $faker->name();
            $newPost->author_img = $faker->imageUrl(200,200);
            $newPost->description = $faker->paragraph(2);
            $newPost->post_img = $faker->imageUrl(640,380);
            $newPost->title = $faker->words(3, true);
            
            $newPost->save();
            
        }
    }
}
