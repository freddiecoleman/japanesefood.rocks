<?php namespace Japan\Categories;


class CategoryRepository {

    public function all()
    {
        return Category::all();
    }

    public function orderedByParent()
    {
        return Category::all();
    }

}