<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->from = $faker->city();
            $train->to = $faker->city();
            $train->departure = $faker->time();
            $train->arrive = $faker->time();
            $train->train_code = $faker->ean8();
            $train->carriages = $faker->numberBetween(5, 20);
            $train->is_in_time = $faker->boolean();
            $train->is_cancelled = $faker->boolean();
            $train->save();
        }
    }
}
