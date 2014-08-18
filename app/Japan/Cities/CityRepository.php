<?php namespace Japan\Cities;


class CityRepository {

    public function save(City $city)
    {
        return $city->save();
    }


    public function all(City $city)
    {
        return $city->all();
    }

}