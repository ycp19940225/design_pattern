<?php

namespace App\creative_mode\simple_factory;

class ConcreteFactory
{
    /**
     * @var string[]
     */
    private $typeList;

    public function __construct()
    {
        $this->typeList = [
            'bicycle' => __NAMESPACE__ . '\Bicycle',
            'other' => __NAMESPACE__ . '\scooter',
        ];
    }

    public function createVehicle($type)
    {
        if(!array_key_exists($type, $this->typeList)){
            throw new \InvalidArgumentException("$type is not valid vehicle");
        }

        $className = $this->typeList[$type];
        return new $className();
    }
}