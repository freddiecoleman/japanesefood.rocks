<?php

use Japan\Cities\City;

class CityController extends BaseController {

    public function index()
    {
        return City::all();
    }

}
