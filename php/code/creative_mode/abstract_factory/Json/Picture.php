<?php

namespace App\creative_mode\abstract_factory\Json;

use App\creative_mode\abstract_factory\Picture as BasePicture;

class Picture extends BasePicture
{

    public function render()
    {
        return json_encode([
            'title' => $this->name,
            'path' => $this->path,
        ]);
    }
}