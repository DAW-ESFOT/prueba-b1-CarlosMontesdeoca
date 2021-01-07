<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gender;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla
        Gender::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for($i = 0; $i < 8; $i++) {
            Gender::create([
                'name'=> $faker->name,
            ]);
        }
    }
}
