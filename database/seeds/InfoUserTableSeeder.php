<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\UserInfo;

class InfoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<10;$i++){

            $newInfo = new UserInfo();
            $newInfo->age = $faker->randomDigit();
            $newInfo->address = $faker->words(3, true);
            $newInfo->zip_code = $faker->randomDigit();

            $newInfo->save();
        }
    }
}
