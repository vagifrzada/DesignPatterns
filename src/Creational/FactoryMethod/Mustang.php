<?php

namespace Vagif\DesignPatterns\Creational\FactoryMethod;

/**
 * Class Mustang
 */
class Mustang extends FordCar
{
    /**
     * @return string
     */
    public function getType(): string
    {
       return 'Muscle car';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Ford Mustang';
    }
}