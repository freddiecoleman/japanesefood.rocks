<?php namespace Japan\Categories;


class CategoryRepository {

    public function all()
    {
        return Category::all();
    }

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

                    $subNav[] = ['id' => $category->id, 'name' => $category->name];

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

}