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
            'name'        => 'More food',
            'description' => '',
            'parent_id'   => 0,
            'thumbnail'   => '',
            'created_at'  => $faker->dateTime()
        ]);

        Category::create([
            'name'        => 'Ramen',
            'intro'       => $faker->sentence(),
            'description' => 'Each region of Japan has it\'s own flavour of ramen. From the thick miso ramen of Hokkaido to the cloudy white tonkotsu ramen of Kyushuu.',
            'parent_id'   => Category::where('name', '=', 'Noodles')->firstOrFail()->id,
            'thumbnail'   => 'ramen.jpg',
            'created_at'  => $faker->dateTime()
        ]);

        Category::create([
            'name'        => 'Udon',
            'intro'       => $faker->sentence(),
            'description' => 'Udon can be served hot or cold and different toppings are used at different times of year. Like ramen there are different flavours of ramen from each region of Japan.',
            'parent_id'   => Category::where('name', '=', 'Noodles')->firstOrFail()->id,
            'thumbnail'   => 'udon.jpg',
            'created_at'  => $faker->dateTime()
        ]);

        Category::create([
            'name'        => 'Sushi',
            'intro'       => $faker->sentence(),
            'description' => 'The key to sushi is the vinegar flavoured rice. There are many different toppings; often raw seafood. Many types of sushi cannot be found outside of Japan.',
            'parent_id'   => Category::where('name', '=', 'Seafood')->firstOrFail()->id,
            'thumbnail'   => 'sushi.jpg',
            'created_at'  => $faker->dateTime()
        ]);

        Category::create([
            'name'        => 'Sashimi',
            'intro'       => $faker->sentence(),
            'description' => 'Le raw fish, unlike sushi it doesn\'t require rice.',
            'parent_id'   => Category::where('name', '=', 'Seafood')->firstOrFail()->id,
            'thumbnail'   => 'sashimi.jpg',
            'created_at'  => $faker->dateTime()
        ]);

        Category::create([
            'name'        => 'Curry',
            'intro'       => $faker->sentence(),
            'description' => 'sou desu ka',
            'parent_id'   => Category::where('name', '=', 'More food')->firstOrFail()->id,
            'thumbnail'   => 'curry.jpg',
            'created_at'  => $faker->dateTime()
        ]);

        Category::create([
            'name'        => 'Okonomiyaki',
            'intro'       => $faker->sentence(),
            'description' => 'sou desu ka',
            'parent_id'   => Category::where('name', '=', 'More food')->firstOrFail()->id,
            'thumbnail'   => 'okonomiyaki.jpg',
            'created_at'  => $faker->dateTime()
        ]);

        Category::create([
            'name'        => 'Tonkatsu',
            'intro'       => $faker->sentence(),
            'description' => 'sou desu ka',
            'parent_id'   => Category::where('name', '=', 'More food')->firstOrFail()->id,
            'thumbnail'   => 'tonkatsu.jpg',
            'created_at'  => $faker->dateTime()
        ]);

        Category::create([
            'name'        => 'Gyoza',
            'intro'       => $faker->sentence(),
            'description' => 'sou desu ka',
            'parent_id'   => Category::where('name', '=', 'More food')->firstOrFail()->id,
            'thumbnail'   => 'gyoza.jpg',
            'created_at'  => $faker->dateTime()
        ]);

    }

}