<?php

namespace App\creative_mode\simple_factory\Tests;

use App\creative_mode\simple_factory\StaticFactory;
use PHPUnit\Framework\TestCase;

class ConcreteFactoryTest extends TestCase
{

    protected $factory;

    protected function setUp() : void
    {
        $this->factory = new StaticFactory();
    }

    public function getType()
    {
        return array(
            array('bicycle'),
            array('other')
        );
    }

    /**
     * @dataProvider getType
     */
    public function testCreation($type)
    {
        $obj = $this->factory->createVehicle($type);
        $this->assertInstanceOf('App\creative_mode\simple_factory\FormatterInterface', $obj);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testBadType()
    {
        $this->factory->createVehicle('bicycle');
    }
}
