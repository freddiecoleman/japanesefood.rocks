<?php namespace Japan\Cities;


class City extends \Eloquent {

    protected $table = 'cities';

    public function flavours()
    {
        return $this->hasMany('Flavour');
    }

}