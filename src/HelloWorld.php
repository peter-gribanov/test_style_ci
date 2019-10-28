<?php
declare(strict_types=1);

namespace StyleCI;

class HelloWorld
{
	public function sayHello(\DateTimeImutable $date): void
	{
		echo 'Hello, ' . $date->format('j. n. Y');
	}
}
