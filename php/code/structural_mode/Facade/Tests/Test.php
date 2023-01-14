<?php

namespace App\structural_mode\Facade\Tests;

use App\structural_mode\Facade\Facade as Computer;
use App\structural_mode\Facade\OsInterface;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function getComputer()
    {
        $bios = $this->getMockBuilder('App\structural_mode\Facade\BiosInterface')
            ->setMethods(array('launch', 'execute', 'waitForKeyPress'))
            ->disableAutoload()
            ->getMock();
        $os = $this->getMockBuilder('App\structural_mode\Facade\OsInterface')
            ->setMethods(array('getName'))
            ->disableAutoload()
            ->getMock();
        $bios->expects($this->once())
            ->method('launch')
            ->with($os);
        $os->expects($this->once())
            ->method('getName')
            ->will($this->returnValue('Linux'));

        $facade = new Computer($os, $bios);
        return array(array($facade, $os));
    }

    /**
     * @dataProvider getComputer
     */
    public function testComputerOn(Computer $facade, OsInterface $os)
    {
        // interface is simpler :
        $facade->turnOn();
        // but I can access to lower component
        $this->assertEquals('Linux', $os->getName());
    }
}
