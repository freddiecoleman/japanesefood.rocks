<?php

use Faker\Factory as Faker;
use Japan\Cities\City;

class CitiesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $index)
        {
            City::create([
                'name'       => $faker->word,
                'name_jp'       => $faker->word,
                'created_at' => $faker->dateTime()
            ]);
        }
    }

}