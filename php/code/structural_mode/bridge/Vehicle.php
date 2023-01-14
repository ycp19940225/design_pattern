<?php

namespace App\structural_mode\bridge;

abstract class Vehicle
{
    protected  $work1;
    protected  $work2;

    public function __construct(WorkShop $workShop1, WorkShop $workShop2)
    {
        $this->work1 = $workShop1;
        $this->work2 = $workShop2;
    }

    public function manufacture()
    {

    }
}