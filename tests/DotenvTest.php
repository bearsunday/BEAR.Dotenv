<?php

declare(strict_types=1);

namespace BEAR\Dotenv;

use PHPUnit\Framework\TestCase;

use function getenv;

class DotenvTest extends TestCase
{
    protected Dotenv $dotenv;

    protected function setUp(): void
    {
        $this->dotenv = new Dotenv();
    }

    public function testIsInstanceOfDotenv(): void
    {
        $actual = $this->dotenv;
        $this->assertInstanceOf(Dotenv::class, $actual);
    }

    public function testLoadDist(): void
    {
        $this->dotenv->load(__DIR__ . '/Fake/dist');
        $this->assertSame($_ENV['FOO'], 'BAR');
    }

    public function testLoadEnv(): void
    {
        $this->dotenv->load(__DIR__ . '/Fake/env');
        $this->assertSame($_ENV['BAR'], 'BAZ');
    }

    public function testLoadGetEnv(): void
    {
        $this->dotenv->load(__DIR__ . '/Fake/dist');
        $this->assertSame(getenv('FOO'), 'BAR');
    }

    public function testLoadNothing(): void
    {
        $this->dotenv->load(__DIR__ . '/Fake/none');
        $this->assertArrayNotHasKey('FOO', $_ENV);

    }
}
