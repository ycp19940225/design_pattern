<?php

namespace App\creative_mode\abstract_factory;

class HtmlFactory extends AbstractFactory {

    public function createText($content)
    {
        return new Html\Text($content);
    }

    public function createPicture($path, $name = '')
    {
        return new Html\Picture($path, $name);
    }
}
