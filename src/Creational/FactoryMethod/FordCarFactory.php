<?php

namespace Vagif\DesignPatterns\Creational\FactoryMethod;

/**
 * Interface FordCarFactory
 */
interface FordCarFactory
{
    /**
     * @return FordCar
     */
    public function make(): FordCar;
}