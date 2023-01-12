<?php

namespace App\creative_mode\abstract_factory\Html;

use App\creative_mode\abstract_factory\Picture as BasePicture;

class Picture extends BasePicture
{

    public function render()
    {
        return sprintf('<img src="%s" title="%s"/>', $this->path, $this->name);
    }
}