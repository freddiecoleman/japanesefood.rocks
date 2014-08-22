<?php namespace Japan\Ramen;


class RamenRepository {

    public function save(Ramen $ramen)
    {
        return $ramen->save();
    }

    public function all()
    {
        return Ramen::with('City')->get();
    }

}