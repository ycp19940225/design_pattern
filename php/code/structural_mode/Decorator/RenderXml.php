<?php

namespace App\structural_mode\Decorator;

use DOMDocument;

class RenderXml extends Decorator
{

    public function renderData()
    {
        $output = $this->render->renderData();

        // do some fancy conversion to xml from array ...

        $doc = new DOMDocument();

        foreach ($output as $key => $val) {
            $doc->appendChild($doc->createElement($key, $val));
        }

        return $doc->saveXML();
    }
}