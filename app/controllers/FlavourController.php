<?php

use Japan\Flavours\Flavour;
use Japan\Flavours\FlavourRepository;

class FlavourController extends BaseController {

    /**
     * @var FlavourRepository
     */
    private $flavourRepository;

    function __construct(FlavourRepository $flavourRepository)
    {
        $this->flavourRepository = $flavourRepository;
    }

    public function index()
    {
        return $this->flavourRepository->all();
    }

}
