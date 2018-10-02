<?php

namespace Acme;

class Kindle implements EReaderInterface
{
    public function turnOn()
    {
        var_dump('turn on kindle');
    }


    public function pressNextButton()
    {
        var_dump('next kindle');

    }
}