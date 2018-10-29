<?php declare(strict_types = 1);

namespace Vagif\DesignPatterns\Creational\Singleton;

class SingletonLegacy
{
	/**
	 * This stores the only instance of class
	 * 
	 * @var null|object
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
     * Don't allow cloning the object
     */
    private function __clone() {}

    /**
     * Don't allow un-serializing the object
     */
    private function __wakeup() {}
}
