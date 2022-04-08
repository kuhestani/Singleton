<?php

declare(strict_types=1);

namespace Kuhestani\Singleton;

use Kuhestani\Singleton\SingletonTrait;
use Kuhestani\Singleton\SingletonInterface;

abstract class SingletonTemplate implements SingletonInterface
{
	use SingletonTrait;
	abstract protected function create(): void;
}