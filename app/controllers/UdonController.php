<?php

use Japan\Udon\UdonRepository;

class UdonController extends BaseController {

    /**
     * @var FlavourRepository
     */
    private $udonRepository;

    function __construct(UdonRepository $udonRepository)
    {
        $this->udonRepository = $udonRepository;
    }

    public function index()
    {
        return $this->udonRepository->all();
    }

}
