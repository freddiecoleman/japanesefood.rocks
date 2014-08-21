<?php namespace Japan\Flavours;


class FlavourRepository {

    public function save(Flavour $flavour)
    {
        return $flavour->save();
    }

    public function all()
    {
        return Flavour::with('City')->get();
    }

}