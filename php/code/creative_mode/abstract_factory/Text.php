<?php


namespace App\creative_mode\abstract_factory;

abstract class Text implements MediaInterface
{

    /**
     * @var mixed|string
     */
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }
}
