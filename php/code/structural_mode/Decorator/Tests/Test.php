<?php

namespace App\structural_mode\Decorator\Tests;

use App\structural_mode\Decorator\RenderJson;
use App\structural_mode\Decorator\RenderXml;
use App\structural_mode\Decorator\Webservice;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    protected $service;

    protected function setUp() : void
    {
        $this->service = new Webservice(array('foo' => 'bar'));
    }

    public function testDecoratorJson()
    {
        // Wrap service with a JSON decorator for renderers
        $service = new RenderJson($this->service);
        // Our Renderer will now output JSON instead of an array
        $this->assertEquals('{"foo":"bar"}', $service->renderData());
    }

    public function testDecoratorXml()
    {
        // Wrap service with a XML decorator for renderers
        $service = new RenderXml($this->service);
        // Our Renderer will now output XML instead of an array
        $xml = '<?xml version="1.0"?><foo>bar</foo>';
        $this->assertXmlStringEqualsXmlString($xml, $service->renderData());
    }
}
