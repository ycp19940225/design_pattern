<?php

namespace App\structural_mode\Decorator;

abstract class Decorator implements RenderInterface
{
    /**
     * @var RenderInterface
     */
    protected $render;

    public function __construct(RenderInterface $render)
    {
        $this->render = $render;
    }
}