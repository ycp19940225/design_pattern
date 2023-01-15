<?php

namespace App\structural_mode\Dependency\Tests;

use App\structural_mode\Dependency\ArrayConfig;
use App\structural_mode\Dependency\Connection;
use PHPUnit\Framework\TestCase;

class Test1 extends TestCase
{
    /**
     * @var Connection
     */
    protected $connect;
    protected $source;

    public function setUp() : void
    {
        $this->source = include 'config.php';
        $this->config = new ArrayConfig($this->source);
    }
    public function testConnect()
    {
        $this->connect = new Connection($this->config);
        $this->connect->connect();
        $this->assertEquals($this->source['host'], $this->connect->getHost());
    }

}
