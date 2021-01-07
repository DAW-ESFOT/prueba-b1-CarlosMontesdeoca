<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Gender;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla
        Movie::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla

        $genders = Gender::all();foreach ($genders as $gender) {
            // iniciamos sesión con este usuario
            
            // Y ahora con este usuario creamos algunos articulos
            $num_movies = 5;for ($j = 0; $j < $num_movies; $j++) {
                Movie::create([
                    'name'=> $faker->name,
                    'code'=> $faker->name,
                    'year'=> $faker->date,
                    'available' => true,
                ]);
            }
        }
    }
}
