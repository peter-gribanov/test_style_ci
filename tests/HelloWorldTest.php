<?php
declare(strict_types=1);

namespace Tests;

use StyleCI\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    private $hw;

    protected function setUp(): void
    {
        $this->hw = new HelloWorld();
    }

    public function testAlreadyStarted(): void
    {
        $this->hw->sayHello(new \DateTimeImmutable());
    }
}
