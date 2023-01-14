<?php

namespace App\structural_mode\Decorator;

class RenderJson extends Decorator
{

    public function renderData()
    {
        $output = $this->render->renderData();

        return json_encode($output,  256);
    }
}