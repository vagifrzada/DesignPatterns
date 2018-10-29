<?php

namespace Vagif\DesignPatterns\Tests\Creational\Singleton;

use PHPUnit\Framework\TestCase;
use Vagif\DesignPatterns\Creational\Singleton\SingletonLegacy;

class SingletonTest extends TestCase
{
    public function testSingletonLegacyVersion()
    {
        $obj  = SingletonLegacy::getInstance();
        $obj2 = SingletonLegacy::getInstance();

        $this->assertSame($obj, $obj2);
    }
}