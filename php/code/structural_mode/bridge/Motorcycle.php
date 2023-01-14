<?php

namespace App\structural_mode\bridge;

class Motorcycle extends Vehicle
{
    public function __construct(WorkShop $workShop1, WorkShop $workShop2)
    {
        parent::__construct($workShop1, $workShop2);
    }
    public function manufacture()
    {
        print("motorcycle");
        $this->work1->work();
        $this->work2->work();
    }
}