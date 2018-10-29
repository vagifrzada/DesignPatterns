<?php

namespace Vagif\DesignPatterns\Tests\Creational\Singleton;

use Vagif\DesignPatterns\Creational\Singleton\SingletonModern;

class Database extends SingletonModern
{
    /**
     * @var string $dsn
     */
    protected $dsn;

    /**
     * @param string $dsn
     * @return void
     */
    public function setDsn(string $dsn): void
    {
        $this->dsn = $dsn;
    }

    /**
     * @return string
     */
    public function getDsn(): string
    {
        return $this->dsn;
    }
}