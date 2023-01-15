<?php

namespace App\structural_mode\Dependency;

abstract class AbstractConfig
{
    protected $storage;

    public function __construct($storage)
    {
        $this->storage = $storage;
    }
}