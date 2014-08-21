<?php namespace Japan\Flavours;


class FlavourRepository {

    public function save(Flavour $flavour)
    {
        return $flavour->save();
    }

    public function all()
    {
        //return Flavour::all();
        $test = Flavour::find(1);
        dd($test);
    }

}