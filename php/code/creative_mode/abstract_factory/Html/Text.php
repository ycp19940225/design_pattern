<?php

namespace App\creative_mode\abstract_factory\Html;

use App\creative_mode\abstract_factory\Text as BasePicture;

class Text extends BasePicture
{

    public function render()
    {
        return '<div>' . htmlspecialchars($this->text) . '</div>';
    }
}