<?php

declare(strict_types=1);

namespace BEAR\Dotenv;

use PHPUnit\Framework\TestCase;

class DotenvTest extends TestCase
{
    /**
     * @var Dotenv
     */
    protected $dotenv;

    protected function setUp() : void
    {
        $this->dotenv = new Dotenv;
    }

    public function testIsInstanceOfDotenv() : void
    {
        $actual = $this->dotenv;
        $this->assertInstanceOf(Dotenv::class, $actual);
    }
}
