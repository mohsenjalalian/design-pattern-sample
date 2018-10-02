<?php

namespace App;

use App\Sub;

class VeggieSub extends Sub
{
    public function addVeggies()
    {
        var_dump('add veggies');

        return $this;
    }

    public function addPrimaryToppings()
    {
        var_dump('veggies!');

        return $this;
    }
}