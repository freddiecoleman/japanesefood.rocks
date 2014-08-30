<?php namespace Japan\Food;

class Food extends \Eloquent {

    protected $table = 'food';

    public function city()
    {
        return $this->belongsTo('Japan\Cities\City');
    }

    public function category()
    {
        return $this->belongsTo('Japan\Categories\Category');
    }

}