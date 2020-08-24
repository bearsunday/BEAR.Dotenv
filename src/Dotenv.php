<?php

declare(strict_types=1);

namespace BEAR\Dotenv;

use Dotenv\Dotenv as PhpDotenv;

use function file_exists;
use function realpath;
use function sprintf;

final class Dotenv
{
    public function load(string $dir): void
    {
        if (file_exists((string) realpath(sprintf('%s/.env', $dir)))) {
            PhpDotenv::createImmutable($dir)->load();

            return;
        }

        if (! file_exists((string) realpath(sprintf('%s/.env.dist', $dir)))) {
            return;
        }

        (PhpDotenv::createImmutable($dir, '.env.dist'))->load();
    }
}
