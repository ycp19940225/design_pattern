<?php

namespace App\structural_mode\Registry;

class Registry
{
    private static $storedValues;

    static public function set($key, $val)
    {
        self::$storedValues[$key] = $val;
    }

    static public function get($key)
    {
        return self::$storedValues[$key];
    }
}