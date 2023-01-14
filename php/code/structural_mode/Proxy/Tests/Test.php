<?php

namespace App\structural_mode\Proxy\Tests;

use App\structural_mode\Proxy\RecordProxy;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testSetAttribute(){
        $data = [];
        $proxy = new RecordProxy($data);
        $proxy->xyz = false;
        $this->assertTrue($proxy->xyz===false);
    }
}
