<?php

namespace Vagif\DesignPatterns\Creational\FactoryMethod;

/**
 * Class FordCar
 */
abstract class FordCar
{
    /**
     * @return string
     */
    abstract public function getType(): string;

    /**
     * @return string
     */
    abstract public function getName(): string;
}