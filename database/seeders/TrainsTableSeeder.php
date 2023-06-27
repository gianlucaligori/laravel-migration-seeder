<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <= 100; $i++) {
            Train::create([

                    'company' => $faker->company(),
                    'departure_station' => $faker->city(),
                    'arrival_station' =>  $faker->city(),
                    'departure_time' => $faker->time(),
                    'departure_date' => $faker->date(),
                    'arrival_time' => $faker->time(),
                    'arrival_date' => $faker->date(),
                    'train_code' => rand(25, 300),
                    'number_of_carriages' => rand(1, 25),
                    'in_time' => $faker->boolean(),
                    'delete' => $faker->boolean(['Yes', 'No']),
            ]);
        }
    }
}



