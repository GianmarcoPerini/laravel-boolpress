<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user = new User();
        $user->name = 'Gianmarco';
        $user->email = 'g.marco.perini@gmail.com';
        $user->password = bcrypt('zxcvzxcv');

        $user->save();

        for($i=0;$i<10;$i++){

            $user = new User();
            $user->name = $faker->name();
            $user->email = $faker->safeEmail();
            $user->password = bcrypt($faker->password(9,20));
    
            $user->save();
        }
    }
}


