<?php

namespace Acme;

class Nook implements EReaderInterface
{

    public function turnOn()
    {
        var_dump('nook on');
    }

    public function pressNextButton()
    {
        var_dump('nook next');
    }
}