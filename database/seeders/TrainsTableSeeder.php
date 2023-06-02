<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departureStation = $faker->words(5, true);
            $newTrain->arrivalStation = $faker->words(5, true);
            $newTrain->departureTime = $faker->time();
            $newTrain->arrivalTime = $faker->time();
            $newTrain->trainCode = $faker->randomNumber(6, true);
            $newTrain->carriagesNumber = $faker->randomDigitNotNull();
            $newTrain->inTime = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
