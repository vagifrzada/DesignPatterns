<?php

namespace Vagif\DesignPatterns\Tests\Creational\FactoryMethod;

use PHPUnit\Framework\TestCase;
use Vagif\DesignPatterns\Creational\FactoryMethod\{Focus, FocusFactory, Mustang, MustangFactory};

/**
 * Class FactoryMethodTest
 */
class FactoryMethodTest extends TestCase
{
    public function testCreateMustangCar()
    {
        $this->assertInstanceOf(Mustang::class, (new MustangFactory)->make());
    }

    public function testCanGetTypeOfCar()
    {
        $factory = new FocusFactory();
        $focus = $factory->make();

        $this->assertInstanceOf(Focus::class, $focus);
        $this->assertEquals('Compact car', $focus->getType());
    }
}