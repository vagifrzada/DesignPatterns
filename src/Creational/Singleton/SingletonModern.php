<?php declare(strict_types = 1);

namespace Vagif\DesignPatterns\Creational\Singleton;

class SingletonModern
{
	/**
	 * This stores the only instance of class
	 * 
	 * @var null|static
	 */
	private static $instance = null;

	/**
	 * This is how we get our single instance.
	 * 
	 * @return static
	 */
	public static function getInstance()
	{
		// Late static binding comes here...
		if (self::$instance === null) {
			self::$instance = new static();
		}

		return self::$instance;
	}

	/**
	 * Must be protected. Because, pattern will be inherit from another class.  
	 */
	protected function __construct() {}

    /**
     * Don't allow cloning the object
     */
    private function __clone() {}

    /**
     * Don't allow un-serializing the object
     */
    private function __wakeup() {}
}
