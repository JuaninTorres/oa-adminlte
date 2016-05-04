<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Usuarios
         */
        $users = [
            [
                'name' => 'Juan Torres',
                'email' => 'juanin.torres@gmail.com',
                'password' => 'pass',
                'avatar' => 'https://lh5.googleusercontent.com/-lUOlnJJsZSU/AAAAAAAAAAI/AAAAAAAALFs/JQY9qxrmfrk/photo.jpg'
            ],
            [
                'name' => 'Alex Novoa',
                'email' => 'anovoabarrientos@gmail.com',
                'password' => 'pass',
                'avatar' => 'https://lh3.googleusercontent.com/-Fv_4qBqvVO8/AAAAAAAAAAI/AAAAAAAAADk/a_m15IHnp-A/photo.jpg'
            ],

        ];
        foreach ($users as $user)
        {
            User::create($user);
        }

        /*
         * Creamos 30 usuario de prueba
         */
//        factory(User::class, 30)->create();

    }
}
