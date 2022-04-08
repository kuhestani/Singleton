<?php

declare(strict_types=1);

namespace Kuhestani\Singleton;

interface SingletonInterface
{
	public static function getInstance(): self;
	public function __wakeup();
}