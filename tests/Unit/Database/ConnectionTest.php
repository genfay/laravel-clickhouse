<?php

declare(strict_types=1);

namespace Genfay\LaravelClickHouse\Tests\Database;

use PHPUnit\Framework\TestCase;
use Tinderbox\ClickhouseBuilder\Integrations\Laravel\Connection;
use Genfay\LaravelClickHouse\Database\Query\Builder;

class ConnectionTest extends TestCase
{
    public function testQuery()
    {
        $connection = new Connection(['host' => 'localhost']);

        $this->assertInstanceOf(Builder::class, $connection->query());
    }
}
