<?php

namespace App\creative_mode\builder\Tests;

use App\creative_mode\builder\BikeBuilder;
use App\creative_mode\builder\BuilderInterface;
use App\creative_mode\builder\CarBuilder;
use App\creative_mode\builder\Director;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    protected $director;

    protected function setUp() : void
    {
        $this->director = new Director();
    }

    public function getBuilder()
    {
        return array(
            array(new CarBuilder()),
            array(new BikeBuilder())
        );
    }

    /**
     * 这里我们测试建造过程，客户端并不知道具体的建造者。
     *
     * @dataProvider getBuilder
     */
    public function testBuild(BuilderInterface $builder)
    {
        $newVehicle = $this->director->build($builder);
        $this->assertInstanceOf('App\creative_mode\builder\Parts\Vehicle', $newVehicle);
    }
}
