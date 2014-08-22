<?php namespace Japan\Udon;


class UdonRepository {

    public function save(Udon $udon)
    {
        return $udon->save();
    }

    public function all()
    {
        return Udon::with('City')->get();
    }

}