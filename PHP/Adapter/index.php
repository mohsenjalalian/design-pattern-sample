<?php

require 'vendor/autoload.php';

use Acme\Book;
use Acme\BookInterface;
use Acme\Nook;
use Acme\Kindle;
use Acme\KindleAdapter;
use Acme\NookAdapter;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

(new Person)->read(new Book);
(new Person)->read(new KindleAdapter(new Kindle));
(new Person)->read(new NookAdapter(new Nook()));