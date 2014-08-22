<?php

use Japan\Sushi\SushiRepository;

class SushiController extends BaseController {

    /**
     * @var FlavourRepository
     */
    private $sushiRepository;

    function __construct(SushiRepository $sushiRepository)
    {
        $this->sushiRepository = $sushiRepository;
    }

    public function index()
    {
        return $this->sushiRepository->all();
    }

}
