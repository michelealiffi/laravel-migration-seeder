<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_di_partenza' => $faker->city,
                'stazione_di_arrivo' => $faker->city,
                'orario_di_partenza' => $faker->dateTimeBetween('now', '+1 week'),
                'orario_di_arrivo' => $faker->dateTimeBetween('+1 week', '+2 weeks'),
                'codice_treno' => strtoupper($faker->bothify('??###')),
                'numero_carrozze' => $faker->numberBetween(1, 20),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
}
