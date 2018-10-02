<?php

namespace Acme;

class NookAdapter implements BookInterface
{
    private $nook;

    public function  __construct(Nook $nook)
    {
        $this->nook = $nook;
    }

    public function open()
    {
        return $this->nook->turnOn();
    }

    public function turnPage()
    {
        return $this->nook->pressNextButton();
    }
}