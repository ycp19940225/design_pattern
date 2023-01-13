<?php

namespace App\creative_mode\static_factory\Tests;

use App\creative_mode\static_factory\StaticFactory;
use PHPUnit\Framework\TestCase;

class ConcreteFactoryTest extends TestCase
{

    public function getTypeList()
    {
        return array(
            array('string'),
//            array('number')
        );
    }

    /**
     * @dataProvider getTypeList
     */
    public function testCreation($type)
    {
        $obj = StaticFactory::factory($type);
        $this->assertInstanceOf('App\creative_mode\static_factory\FormatterInterface', $obj);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory("");
    }
}
