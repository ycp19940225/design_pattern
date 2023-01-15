<?php

namespace App\structural_mode\Registry\Tests;

use App\structural_mode\Registry\Registry;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testRegistry()
    {
        Registry::set('log', new \stdClass());
        $logger = Registry::get('log');
        $this->assertInstanceOf('StdClass', $logger);
    }
}
