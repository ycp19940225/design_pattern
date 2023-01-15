<?php

namespace App\Behavioral\Observer\Tests;

use App\Behavioral\Observer\User;
use App\Behavioral\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    protected function setUp(): void
    {
        $this->observer = new UserObserver();
    }


    public function testNotify()
    {
        $this->expectOutputString('App\Behavioral\Observer\User:changed');
        $subject = new User();

        $subject->attach($this->observer);
        $subject->property = 123;
    }

    /**
     * 测试订阅
     */
    public function testAttachDetach()
    {
        $subject = new User();
        $reflection = new \ReflectionProperty($subject, 'observers');

        $reflection->setAccessible(true);
        /** @var \SplObjectStorage $observers */
        $observers = $reflection->getValue($subject);

        $this->assertInstanceOf('SplObjectStorage', $observers);
        $this->assertFalse($observers->contains($this->observer));

        $subject->attach($this->observer);
        $this->assertTrue($observers->contains($this->observer));

        $subject->detach($this->observer);
        $this->assertFalse($observers->contains($this->observer));
    }


}
