<?php

namespace App\creative_mode\builder\Parts;

abstract class Vehicle
{

    protected  $Data;

    public function setPart($key, $val)
    {
        $this->Data[$key] = $val;
    }
}