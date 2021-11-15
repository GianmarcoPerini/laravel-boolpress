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

            $newPost->name = $faker->name();
            $newPost->save();
            
        }
    }
}
