<?php

declare(strict_types=1);

namespace Kuhestani\Singleton;

interface SingletonInterface
{
	public static function getInstance(): object;
	public function __wakeup();
}