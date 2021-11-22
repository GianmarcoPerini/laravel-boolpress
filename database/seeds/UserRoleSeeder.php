<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Arr;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recuperiamo tutti gli utenti registrati nel db
        $users = User::all();
        
        // Recuperiamo tutti i ruoli e ne prendiamo esclusivamente gli id inserendoli in un nuovo array
        $role_ids = Arr::pluck(Role::all(), 'id');

        // Per ogni utente
        foreach ($users as $user){
            // Aggiungiamo alla sua lista dei ruoli un ruolo randomicamente preso tra quelli disponibili
            $user->role()->sync([Arr::random($role_ids), Arr::random($role_ids)]);
        }
    }
}
