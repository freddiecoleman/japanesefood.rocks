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

    public function index()
    {
        return $this->categoryRepository->orderedByParent();
    }

}
