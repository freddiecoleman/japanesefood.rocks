<?php

use Japan\Food\FoodRepository;

class FoodController extends BaseController {

    /**
     * @var FlavourRepository
     */
    private $foodRepository;

    function __construct(FoodRepository $foodRepository)
    {
        $this->foodRepository = $foodRepository;
    }

    public function index($name)
    {
        return $this->foodRepository->allFromCategory($name);
    }

}
