<?php namespace Japan\Categories;


class CategoryRepository {

    public function orderedByParent()
    {
        $categories     = Category::all();
        $rootCategories = [];
        $subNav         = [];
        $navigation     = [];

        foreach ($categories as $category)
        {

            if ($category->parent_id == 0)
            {
                $rootCategories[] = ['id' => $category->id, 'name' => $category->name];
            }

        }

        foreach ($rootCategories as $rootCategory)
        {

            foreach ($categories as $category)
            {

                if ($category->parent_id == $rootCategory['id'])
                {

                    $subNav[] = [
                        'id'          => $category->id,
                        'name'        => $category->name,
                        'description' => $category->description,
                        'thumbnail'   => $category->thumbnail
                    ];

                }

            }

            $navigation[] = [
                'root'   => $rootCategory['name'],
                'subnav' => $subNav
            ];

            $subNav = [];

        }


        return $navigation;
    }

    public function all()
    {
        return Category::all();
    }

    public function nonRootCategoryList()
    {
        return Category::where('parent_id', '!=', 0)->get();
    }

    public function rootCategoryList()
    {
        return Category::where('parent_id', '!', 0)->get();
    }

    public function categoryWhereNameIs($name)
    {
        return Category::where('name', '=', $name)->get();
    }

}