<?php

declare(strict_types=1);

namespace Kuhestani\Singleton;

use Kuhestani\Singleton\SingletonTrait;
use Kuhestani\Singleton\SingletonTemplate;
use Kuhestani\Singleton\SingletonInterface;

final class SingletonExample extends SingletonTemplate implements SingletonInterface
{
	use SingletonTrait;
	protected function create(): void
	{
		static::$instance = new static();
	}
}