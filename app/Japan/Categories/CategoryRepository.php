<?php namespace Japan\Categories;


class CategoryRepository {

    public function createNewCategory($data)
    {
        $category              = new Category;
        $category->name        = $data['name'];
        $category->intro       = $data['intro'];
        $category->description = $data['description'];
        $category->parent_id   = $data['parent'];
        $category->thumbnail   = 'test.jpg';
        $category->save();

        return $data;
    }

    public function updateCategory($data)
    {
        $category              = Category::find($data['id']);
        $category->name        = $data['name'];
        $category->intro       = $data['intro'];
        $category->description = $data['description'];
        $category->parent_id   = $data['parent'];
        $category->thumbnail   = 'test.jpg';
        $category->save();

        return $data;
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

    public function categoryWhereIdIs($id)
    {
        return Category::where('id', '=', $id)->get();
    }

}