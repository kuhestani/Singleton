<?php

declare(strict_types=1);

use Kuhestani\Singleton\SingletonExample;
use PHPUnit\Framework\TestCase;

final class SingletonTest extends TestCase
{
	public function testAll(): void
	{
		$instance1 = SingletonExample::getInstance();
		$instance2 = SingletonExample::getInstance();
		$this->assertInstanceOf(
			SingletonExample::class,
			$instance1
		);
		$this->assertInstanceOf(
			SingletonExample::class,
			$instance2
		);
		$this->assertEquals(
			$instance1,
			$instance2
		);

	}
}
