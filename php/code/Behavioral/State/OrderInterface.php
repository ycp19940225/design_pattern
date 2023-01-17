<?php

namespace App\Behavioral\State;

interface OrderInterface
{
    public function shipOrder($id);
    public function createOrder($id);
}