<?php

abstract class HomeChecker
{
    public $successor;

    public abstract function check(HomeStatus $home);


    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}



class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if ( ! $home->locked) {
            throw new Exception('the doors are not locked');
        }

        $this->next($home);
    }
}

class Lights extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if ( ! $home->lightsOff) {
            throw new Exception('the light is not off');
        }

        $this->next($home);
    }
}

class Alarm extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if ( ! $home->alarmOn) {
            throw new Exception('the alarm is not on');
        }

        $this->next($home);
    }

}

class HomeStatus
{

    public $alarmOn = true;
    public $locked = true;
    public $lightsOff = true;

}

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succeedWith($lights);

$lights->succeedWith($alarm);


$status = new HomeStatus;

$locks->check($status);


