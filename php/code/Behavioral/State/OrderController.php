<?php

namespace App\Behavioral\State;

class OrderController
{
    public function shipAction($id)
    {
        $order = OrderFactory::getOrder($id);

        if(!empty($order)){
            $order->shipOrder($id);
        }
        return 'ship';
    }

    public function createdAction($id)
    {
        $order = OrderFactory::getOrder($id);

        if(!empty($order)){
            $order->createOrder($id);
        }
        return 'created';
    }
}