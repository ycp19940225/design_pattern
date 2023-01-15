<?php

namespace App\structural_mode\fluent\Tests;

use App\structural_mode\fluent\Sql;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testBuildSQL()
    {
        $instance = new Sql();
        $query = $instance->select(array('foo', 'bar'))
            ->from('foobar', 'f')
            ->where('f.bar = ?')
            ->getQuery();

        $this->assertEquals('SELECT foo,bar FROM foobar AS f WHERE f.bar = ?', $query);
    }
}
