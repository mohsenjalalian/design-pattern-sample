<?php
namespace Acme;


class Book implements BookInterface
{
    public function open()
    {
        var_dump('open book');
    }

    public function turnPage()
    {
        var_dump('turn page');
    }
}