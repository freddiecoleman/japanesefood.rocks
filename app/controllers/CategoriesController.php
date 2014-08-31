<?php

use Japan\Categories\CategoryRepository;

class CategoriesController extends BaseController {

    /**
     * @var FlavourRepository
     */
    private $categoryRepository;

    function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function store()
    {
        return $this->categoryRepository->createNewCategory(Input::all());
    }

    public function update()
    {
        return $this->categoryRepository->updateCategory(Input::all());
    }

    public function navigation()
    {
        return $this->categoryRepository->orderedByParent();
    }

    public function nonRootCategories()
    {
        return $this->categoryRepository->nonRootCategoryList();
    }

    public function allCategories()
    {
        return $this->categoryRepository->all();
    }

    public function category($id)
    {
        return $this->categoryRepository->categoryWhereIdIs($id);
    }

    public function rootNavigation()
    {
        return $this->categoryRepository->rootCategoryList();
    }

}
