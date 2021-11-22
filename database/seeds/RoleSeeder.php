<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<15;$i++){
            
            $role = new Role();

            $role->name = $faker->name();
            $role->color = $faker->hexColor();

            $role->save();
        }
    }
}
