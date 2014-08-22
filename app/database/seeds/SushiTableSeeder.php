<?php

use Faker\Factory as Faker;
use Japan\Sushi\Sushi;

class RamenTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index)
        {
            Sushi::create([
                'name'        => $faker->word,
                'description' => $faker->sentence(),
                'thumbnail'   => rand(1, 3) . '.jpg',
                'pic'         => rand(1, 3) . '.jpg',
                'created_at'  => $faker->dateTime()
            ]);
        }
    }

}