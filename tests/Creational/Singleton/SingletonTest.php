<?php

namespace Vagif\DesignPatterns\Tests\Creational\Singleton;

use PHPUnit\Framework\TestCase;
use Vagif\DesignPatterns\Creational\Singleton\SingletonLegacy;

class SingletonTest extends TestCase
{
    public function testSingletonLegacyVersion()
    {
        $obj  = SingletonLegacy::init();
        $obj2 = SingletonLegacy::init();

        $this->assertSame($obj, $obj2);
    }
}