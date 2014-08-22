<?php namespace Japan\Sushi;


class SushiRepository {

    public function save(Sushi $sushi)
    {
        return $sushi->save();
    }

    public function all()
    {
        return Sushi::all();
    }

}