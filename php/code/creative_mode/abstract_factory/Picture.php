<?php

namespace App\creative_mode\abstract_factory;

abstract class Picture implements MediaInterface
{

    protected $path;
    /**
     * @var mixed|string
     */
    protected $name;

    public function __construct($path, $name = '')
    {
        $this->path = $path;
        $this->name = $name;
    }
}
