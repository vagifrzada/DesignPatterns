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

    public function testModernApproachOfSingletonUsingInheritance()
    {
        $database = Database::getInstance();
        $database->setDsn('mysql://...');

        $database2 = Database::getInstance();
        $database2->setDsn('postgres://...');

        $this->assertSame($database, $database2);
        $this->assertEquals($database2->getDsn(), $database->getDsn());
    }

    public function testDataIsNotLost()
    {
        $database = Database::getInstance();
        $this->assertEquals('postgres://...', $database->getDsn());
    }
}