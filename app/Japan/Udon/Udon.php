<?php namespace Japan\Udon;

class Udon extends \Eloquent {

    protected $table = 'udon';

    public function city()
    {
        return $this->belongsTo('Japan\Cities\City');
    }

} 