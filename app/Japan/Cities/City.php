<?php namespace Japan\Cities;


class City extends \Eloquent {

    protected $table = 'cities';

    public function ramen()
    {
        return $this->hasMany('Ramen');
    }

}