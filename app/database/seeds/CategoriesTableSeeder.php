<?php

use Faker\Factory as Faker;
use Japan\Categories\Category;

class CategoriesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        Category::create([
            'name'        => 'Noodles',
            'description' => '',
            'parent_id'   => 0,
            'thumbnail'   => '',
            'created_at'  => $faker->dateTime()
        ]);

        Category::create([
            'name'        => 'Seafood',
            'description' => '',
            'parent_id'   => 0,
            'thumbnail'   => '',
            'created_at'  => $faker->dateTime()
        ]);

        Category::create([
            'name'        => 'Ramen',
            'description' => 'Each region of Japan has it\'s own flavour of ramen. From the thick miso ramen of Hokkaido to the cloudy white tonkotsu ramen of Kyushuu.',
            'parent_id'   => Category::where('name', '=', 'Noodles')->firstOrFail()->id,
            'thumbnail'   => 'ramen.jpg',
            'created_at'  => $faker->dateTime()
        ]);

        Category::create([
            'name'        => 'Udon',
            'description' => 'Udon can be served hot or cold and different toppings are used at different times of year. Like ramen there are different flavours of ramen from each region of Japan.',
            'parent_id'   => Category::where('name', '=', 'Noodles')->firstOrFail()->id,
            'thumbnail'   => 'udon.jpg',
            'created_at'  => $faker->dateTime()
        ]);

        Category::create([
            'name'        => 'Sushi',
            'description' => 'The key to sushi is the vinegar flavoured rice. There are many different toppings; often raw seafood. Many types of sushi cannot be found outside of Japan.',
            'parent_id'   => Category::where('name', '=', 'Seafood')->firstOrFail()->id,
            'thumbnail'   => 'seafood.jpg',
            'created_at'  => $faker->dateTime()
        ]);

    }

}