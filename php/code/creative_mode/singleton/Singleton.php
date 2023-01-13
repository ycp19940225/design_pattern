<?php

namespace App\creative_mode\singleton;

class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if(null == self::$instance){
            self::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}