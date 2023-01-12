<?php
namespace App\creative_mode\abstract_factory;

abstract class AbstractFactory{
    abstract public function createText($content);
    abstract public function createPicture($path, $name = '');
}