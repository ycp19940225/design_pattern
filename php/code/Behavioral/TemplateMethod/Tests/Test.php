<?php

namespace App\Behavioral\TemplateMethod\Tests;

use App\Behavioral\TemplateMethod\BeachJourney;
use App\Behavioral\TemplateMethod\CityJourney;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testBeach()
    {
        $journey = new BeachJourney();
        $this->expectOutputRegex('#sun-bathing#');
        $journey->takeATrip();
    }

    public function testCity()
    {
        $journey = new CityJourney();
        $this->expectOutputRegex('#drink#');
        $journey->takeATrip();
    }


    /**
     * 在PHPUnit中如何测试抽象模板方法
     */
    public function testLasVegas()
    {
        $journey = $this->getMockForAbstractClass('App\Behavioral\TemplateMethod\Journey');
        $journey->expects($this->once())
            ->method('enjoyVacation')
            ->will($this->returnCallback(array($this, 'mockUpVacation')));
        $this->expectOutputRegex('#Las Vegas#');
        $journey->takeATrip();
    }

    public function mockUpVacation()
    {
        echo "Fear and loathing in Las Vegas\n";
    }
}
