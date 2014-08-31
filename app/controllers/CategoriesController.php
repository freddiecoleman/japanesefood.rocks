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

    public function navigation()
    {
        return $this->categoryRepository->orderedByParent();
    }

    public function categories()
    {
        return $this->categoryRepository->nonRootCategoryList();
    }

    public function rootNavigation()
    {
        return $this->categoryRepository->rootCategoryList();
    }

}
