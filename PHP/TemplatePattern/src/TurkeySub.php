<?php

namespace App;

use App\Sub;

class TurkeySub extends Sub
{
    public function addTurkey()
    {
        var_dump('add turkey');

        return $this;
    }

    public function addPrimaryToppings()
    {
        var_dump('turkey!');

        return $this;
    }
}