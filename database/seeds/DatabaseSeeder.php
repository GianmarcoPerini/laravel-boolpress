<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PostsTableSeeder::class,
            CategoryTablesSeeder::class,
            UserTableSeeder::class,
            TagSeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class,
        ]);
    }
}