<?php

namespace App\creative_mode\abstract_factory\Json;

use App\creative_mode\abstract_factory\Text as BasePicture;

class Text extends BasePicture
{

    public function render()
    {
        return json_encode([
            'content' => $this->text,
        ]);
    }
}