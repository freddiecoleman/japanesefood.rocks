<?php

use Faker\Factory as Faker;
use Japan\Categories\Category;
use Japan\Food\Food;

class FoodTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        $categories = Category::where('id', '!=', 0);

        foreach ($categories as $category)
        {

            foreach (range(1, 100) as $index)
            {
                Food::create([
                    'name'        => $faker->word,
                    'category_id' => $category->id,
                    'name_jp'     => $faker->word,
                    'description' => $faker->sentence(),
                    'city_id'     => $faker->numberBetween(1, 5),
                    'thumbnail'   => rand(1, 3) . '.jpg',
                    'pic'         => rand(1, 3) . '.jpg',
                    'created_at'  => $faker->dateTime()
                ]);
            }

        }

    }

}