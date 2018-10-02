<?php

interface CarService
{
    public function getCost();

    public function getDescription();
}



class BasicInspection implements CarService
{
    public function getCost()
    {
        return 19;
    }

    public function getDescription()
    {
        return 'Basic service';
    }
}


class OilChange implements CarService
{

    protected $carService;

    /**
     * OilChange constructor.
     * @param CarService $carService
     */
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 29 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', oil change';
    }
}


$service = new OilChange(new BasicInspection());

echo $service->getDescription();