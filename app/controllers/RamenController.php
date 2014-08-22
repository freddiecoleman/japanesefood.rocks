<?php

use Japan\Ramen\RamenRepository;

class RamenController extends BaseController {

    /**
     * @var FlavourRepository
     */
    private $ramenRepository;

    function __construct(RamenRepository $ramenRepository)
    {
        $this->ramenRepository = $ramenRepository;
    }

    public function index()
    {
        return $this->ramenRepository->all();
    }

}
