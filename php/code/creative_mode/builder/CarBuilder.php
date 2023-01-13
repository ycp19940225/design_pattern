<?php

namespace App\creative_mode\builder;


use App\creative_mode\builder\Parts\Car;
use App\creative_mode\builder\Parts\Door;
use App\creative_mode\builder\Parts\Engine;
use App\creative_mode\builder\Parts\Wheel;

class CarBuilder implements BuilderInterface
{

    private $car;

    public function crateVehicle()
    {
        $this->car = new Car();
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLf', new Wheel());
        $this->car->setPart('wheelLr', new Wheel());
        $this->car->setPart('wheelRf', new Wheel());
        $this->car->setPart('wheelRr', new Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addDoor()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
    }

    public function getVehicle()
    {
        return $this->car;
    }
}