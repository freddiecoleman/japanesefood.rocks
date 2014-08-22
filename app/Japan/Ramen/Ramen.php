<?php namespace Japan\Ramen;

class Ramen extends \Eloquent {

    protected $table = 'ramen';

    public function city()
    {
        return $this->belongsTo('Japan\Cities\City');
    }

} 