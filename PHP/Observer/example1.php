<?php

interface Subject
{
    public function attach(Observer $observer);
    public function detach($index);
    public function notify();
}


interface Observer
{
    public function handle();
}


class Login implements Subject
{
    protected $observers = [];

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;

        return $this;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }

    public function fire() {
        $this->notify();
    }
}


class LogHandler implements Observer
{

    public function handle()
    {
        var_dump("log something");
    }
}



class EmailNotifier implements Observer
{

    public function handle()
    {
        var_dump("email something");
    }
}


$login = new Login;

$login->attach(new LogHandler)->attach(new EmailNotifier);

$login->fire();