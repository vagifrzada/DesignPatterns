<?php

namespace Vagif\DesignPatterns\Creational\FactoryMethod;

/**
 * Class FocusFactory
 */
class FocusFactory implements FordCarFactory
{
    /**
     * @return FordCar
     */
    public function make(): FordCar
    {
       return new Focus();
    }
}