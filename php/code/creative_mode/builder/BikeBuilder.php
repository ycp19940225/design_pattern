<?php

namespace App\creative_mode\builder;

use App\creative_mode\builder\Parts\Bike;
use App\creative_mode\builder\Parts\Engine;
use App\creative_mode\builder\Parts\Wheel;

class BikeBuilder implements BuilderInterface
{

    private $bike;

    public function crateVehicle()
    {
        $this->bike = new Bike();
    }

    public function addWheel()
    {
        $this->bike->setPart('forwardWheel', new Wheel());
        $this->bike->setPart('rearWheel', new Wheel());
    }

    public function addEngine()
    {
        $this->bike->setPart('engine', new Engine());
    }

    public function addDoor()
    {
        // TODO: Implement addDoor() method.
    }

    public function getVehicle()
    {
        return $this->bike;

    }
}