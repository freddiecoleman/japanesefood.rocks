<?php

use Faker\Factory as Faker;
use Japan\Cities\City;

class CitiesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index)
        {
            City::create([
                'name'       => $faker->city,
                'population' => $faker->numberBetween(1000000, 100000000),
                'created_at' => $faker->dateTime()
            ]);
        }
    }

}