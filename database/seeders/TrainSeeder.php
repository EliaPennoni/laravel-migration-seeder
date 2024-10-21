<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Train::truncate();



        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->train_code = fake()->numerify();
            $train->company = fake()->company();
            $train->dep_station = fake()->city();
            $train->arr_station = fake()->city();
            $train->departure = fake()->time();
            $train->arrival = fake()->time();
            $train->wagons_number = rand(2, 10);
            $train->on_time = fake()->boolean(70);
            $train->cancelled = fake()->boolean(20);
            $train->save();
        }
    }


}
