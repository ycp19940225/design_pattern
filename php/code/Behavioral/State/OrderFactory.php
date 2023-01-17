<?php

namespace App\Behavioral\State;

class OrderFactory
{
    public static function getOrder($id)
    {
        $orderInfo = [];
        $order = '';
        switch ($orderInfo['status']){
            case 'ship':
                $order = new ShipOrder();
                break;
            case 'create':
                $order = new CreatedOrder();
                break;
            default:
                $order = new CreatedOrder();
                break;
        }
        return $order;
    }
}