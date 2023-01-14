<?php

namespace App\structural_mode\bridge\Tests;

use App\structural_mode\bridge\Assemble;
use App\structural_mode\bridge\Car;
use App\structural_mode\bridge\Motorcycle;
use App\structural_mode\bridge\Produce;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testCar()
    {
        $vehicle = new Car(new Produce(), new Assemble());
        $this->expectOutputString('car');
        $vehicle->manufacture();
    }

    public function testMotorcycle()
    {
        $vehicle = new Motorcycle(new Produce(), new Assemble());
        $this->expectOutputString('motorcycle');
        $vehicle->manufacture();
    }
}
