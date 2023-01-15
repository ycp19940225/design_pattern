<?php

namespace App\structural_mode\Dependency;

interface Parameters
{

    public function get($key);
    public function set($key, $value);
}