<?php
namespace App\creative_mode\builder;

interface BuilderInterface{
    public function crateVehicle();
    public function addWheel();
    public function addEngine();
    public function addDoor();
    public function getVehicle();
}

