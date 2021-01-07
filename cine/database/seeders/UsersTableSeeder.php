<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla
        User::truncate();
        $faker = \Faker\Factory::create();
        
        //$password = Hash::make('123123');

        //User::create([
        //    'name'=> 'Administrador',
        //    'email'=> 'admin@prueba.com',
        //    'password'=> $password,
        //]);

        // Crear artículos ficticios en la tabla
        for($i = 0; $i < 18; $i++) {
            User::create([
                'name'=> $faker->name,
                'lastname'=> $faker->name,
                'document'=> '1234567890',
            ]);
        }
    }
}

