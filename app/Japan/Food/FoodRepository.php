<?php namespace Japan\Food;

use Japan\Categories\Category;

class FoodRepository {

    public function save(Food $food)
    {
        return $food->save();
    }

    public function all()
    {
        return Food::with('Category', 'City')->get();
    }

    public function allFromCategory($name)
    {
        $category = Category::where('name', '=', $name)->firstOrFail();

        return Food::where('category_id', '=', $category->id)->with('City')->get();

    }

}