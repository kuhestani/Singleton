<?php

declare(strict_types=1);

namespace Kuhestani\Singleton;

use \Exception;

trait SingletonTrait
{
	private static ?object $instance = null;
	public static function getInstance(): object
	{
		if (null === static::$instance) {
			static::create();
		}
		return static::$instance;
	}
	public function __wakeup()
	{
		throw new Exception("Cannot unserialize singleton");
	}
	private function __clone()
	{
	}
	private function __construct()
	{
	}
}
