<?php namespace Japan\Flavours;


class Flavour extends \Eloquent {

    protected $table = 'flavours';

    public function city()
    {
        return $this->hasOne('City');
    }

} 