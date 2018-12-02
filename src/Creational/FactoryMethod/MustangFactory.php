<?php

namespace Vagif\DesignPatterns\Creational\FactoryMethod;

/**
 * Class MustangFactory
 */
class MustangFactory implements FordCarFactory
{
    /**
     * @return FordCar
     */
    public function make(): FordCar
    {
        return new Mustang();
    }
}