<?php

namespace Vagif\DesignPatterns\Creational\FactoryMethod;

/**
 * Class Focus
 */
class Focus extends FordCar
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return 'Compact car';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Ford focus';
    }
}