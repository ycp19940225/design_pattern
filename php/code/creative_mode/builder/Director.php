<?php

namespace App\creative_mode\builder;

class Director {
    public function build(BuilderInterface $builder){
        $builder->crateVehicle();
        $builder->addWheel();
        $builder->addDoor();
        $builder->addEngine();
        return $builder->getVehicle();
    }
}