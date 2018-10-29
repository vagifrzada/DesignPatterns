<?php declare(strict_types = 1);

namespace Vagif\DesignPatterns\Creational\Singleton;

class SingletonLegacy
{
	/**
	 * This stores the only instance of class
	 * 
	 * @var null|SingletonLegacy
	 */
	private static $instance = null;

	/**
	 * This is how we get our single instance
	 * 
	 * @return SingletonLegacy
	 */
	public static function getInstance(): self
	{
		if (self::$instance === null) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Must be private || protected 
	 */
	private function __construct() {}

    /**
     * Don't allow the cloning
     */
    private function __clone() {}

    /**
     * Don't allow serialization
     */
    private function __wakeup() {}
}
