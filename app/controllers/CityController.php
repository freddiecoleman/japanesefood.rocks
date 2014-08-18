<?php

use Japan\Cities\City;
use Japan\Cities\CityRepository;

class CityController extends BaseController {

    /**
     * @var CityRepository
     */
    private $cityRepository;

    function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function index()
    {
        return $this->cityRepository->all();
    }

}
